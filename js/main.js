const menuBtn = document.getElementById("mobile-menu-button")
const menu = document.getElementById("mobile-menu")
const menuIcon = document.getElementById("menu-icon")
const themeToggleButtons = document.querySelectorAll("[data-theme-toggle]") || []
const themeIcon = document.getElementById("theme-icon")
const themeIconMobile = document.getElementById("theme-icon-mobile")

const storedTheme = localStorage.getItem("site-theme")
const systemPrefersDark = window.matchMedia && window.matchMedia("(prefers-color-scheme: dark)").matches
const initialTheme = "dark" //storedTheme ? storedTheme : (systemPrefersDark ? "dark" : "light")

const setTheme = (theme) => {
    const isDark = theme === "dark"
    document.documentElement.classList.toggle("dark", isDark)

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
