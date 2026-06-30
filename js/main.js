const menuBtn = document.getElementById("mobile-menu-button")
const menu = document.getElementById("mobile-menu")
const menuIcon = document.getElementById("menu-icon")
const themeToggleButtons = document.querySelectorAll("[data-theme-toggle]") || []
const themeIcon = document.getElementById("theme-icon")
const themeIconMobile = document.getElementById("theme-icon-mobile")

const storedTheme = localStorage.getItem("site-theme")
const systemPrefersDark = window.matchMedia && window.matchMedia("(prefers-color-scheme: dark)").matches
const initialTheme = storedTheme ? storedTheme : (systemPrefersDark ? "dark" : "light")

const setTheme = (theme) => {
    const isDark = theme === "dark"
    const root = document.documentElement
    root.classList.toggle("dark", isDark)
    root.style.colorScheme = isDark ? "dark" : "light"

    const addIcon = isDark ? "bi-sun-fill" : "bi-moon-fill"
    const removeIcon = isDark ? "bi-moon-fill" : "bi-sun-fill"

    const themeIcons = [themeIcon, themeIconMobile].filter(Boolean)
    themeIcons.forEach((icon) => {
        icon.classList.add(addIcon)
        icon.classList.remove(removeIcon)
    })

    localStorage.setItem("site-theme", theme)
}

setTheme(initialTheme)

if (themeToggleButtons.length) {
    themeToggleButtons.forEach((button) => {
        button.addEventListener("click", () => {
            const nextTheme = document.documentElement.classList.contains("dark") ? "light" : "dark"
            setTheme(nextTheme)
        })
    })
}

if (menuBtn && menu && menuIcon) {
    menuBtn.addEventListener("click", () => {
        if(menu.classList.contains("max-h-0")) {
            menu.classList.remove("max-h-0", "opacity-0", "scale-y-95")
            menu.classList.add("max-h-screen", "opacity-100", "scale-y-100")
            menuIcon.classList.replace("bi-list", "bi-x")
        } else {
            menu.classList.add("max-h-0", "opacity-0", "scale-y-95")
            menu.classList.remove("max-h-screen", "opacity-100", "scale-y-100")
            menuIcon.classList.replace("bi-x", "bi-list")
        }
    })
}

const initBackToTop = () => {
    const backToTopBtn = document.getElementById("back-to-top")
    if (!backToTopBtn) return

    const getScrollTop = () =>
        window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0

    const toggleBackToTop = () => {
        const shouldShow = getScrollTop() > 200
        const isVisible = backToTopBtn.classList.contains("is-visible")
        const isHiding = backToTopBtn.classList.contains("is-hiding")

        if (shouldShow && !isVisible) {
            backToTopBtn.classList.remove("is-hiding")
            backToTopBtn.classList.add("is-visible")
        } else if (!shouldShow && isVisible) {
            backToTopBtn.classList.remove("is-visible")
            backToTopBtn.classList.add("is-hiding")
        }
    }

    backToTopBtn.addEventListener("animationend", (event) => {
        if (event.animationName === "back-to-top-out") {
            backToTopBtn.classList.remove("is-hiding")
        }
    })

    backToTopBtn.addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: "smooth" })
        document.documentElement.scrollTo({ top: 0, behavior: "smooth" })
        document.body.scrollTo({ top: 0, behavior: "smooth" })
    })

    window.addEventListener("scroll", toggleBackToTop, { passive: true })
    toggleBackToTop()
}

if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initBackToTop)
} else {
    initBackToTop()
}
