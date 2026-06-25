const machines = [

    {
    logo:"images/logo-azulzinha.svg",
    img:"images/maquina-azulzinha.png",
    title:"Azulzinha Smart:",
    models:["Ingenico (Dx8000)","Sunmi (P2)"]
    },
    
    {
    logo:"images/logo-bin.svg",
    img:"images/maquina-bin.png",
    title:"Bin Smart:",
    models:["Ingenico (Dx8000)", "Sunmi (P2)"]
    },
    
    {
    logo:"images/logo-cielo.svg",
    img:"images/maquina-cielo.png",
    title:"Maquininhas:",
    models:["Lio V1", "Lio V2", "Lio V3 (Lio On)", "Ingenico (Dx8000)"]
    },
    
    {
    logo:"images/logo-getnet.svg",
    img:"images/maquina-getnet.png",
    title:"Get Smart:",
    models:["Ingenico (A8 e Dx8000)", "Newland (N910)", "Sunmi (P2 e P3)"]
    },
    
    {
    logo:"images/logo-pagbank.svg",
    img:"images/maquina-pagseguro.png",
    title:"Maquininhas:",
    models:["Moderninha X", "Moderninha Smart", "Moderninha Smart 2"]
    },
    
    {
    logo:"images/logo-rede.svg",
    img:"images/maquina-rede.png",
    title:"Laranjinha Smart:",
    models:["Positivo (L400)"]
    },
    
    {
    logo:"images/logo-safrapay.svg",
    img:"images/maquina-safrapay.png",
    title:"Safra Smart:",
    models:["Ingenico (A8)", "Sunmi (P2, P3 e P3HK)", "PAX (A910)"]
    },
    
    {
    logo:"images/logo-sicredi.svg",
    img:"images/maquina-sicredi.png",
    title:"Maquininha smart:",
    models:["Ingenico (Dx8000)", "Sunmi (P2)"]
    },
    
    {
    logo:"images/logo-stone.svg",
    img:"images/maquina-stone.png",
    title:"Maquininhas:",
    models:["Ingenico (A8)", "Sunmi (P2 e P2 A11)", "Positivo (L300 e L400)", "Tectoy (T8)"]
    },
    
    {
    logo:"images/logo-vero.svg",
    img:"images/maquina-vero.png",
    title:"Vero Smart:",
    models:["Gertec (GPOS700)", "Newland (N950 e N950K)", "Positivo (L300)", "Sunmi (P2)"]
    }
    
    ]
    
    let index = 0
    
    const image = document.getElementById("machineImage")
    const text = document.getElementById("machineText")
    const logos = document.querySelectorAll(".machine-logo")
    const machineBlock = document.getElementById("machineBlock")
    
    const nextBtn = document.getElementById("next")
    const prevBtn = document.getElementById("prev")
    
    function render(){
    
    image.classList.add("opacity-0","translate-y-4")
    text.classList.add("opacity-0","translate-y-4")
    
    setTimeout(()=>{
    
    const m = machines[index]
    
    image.src = m.img
    
    text.innerHTML = `
    <img src="${m.logo}" class="h-6 mb-4">

    <p class="text-lg text-gray-800 mb-4 dark:text-slate-100">
    ${m.title}
    </p>

    <ul class="space-y-2 text-gray-700 dark:text-slate-300">
    ${m.models.map(model=>`<li>✔ ${model}</li>`).join("")}
    </ul>
    `
    
    logos.forEach(l=>{
    l.classList.remove("opacity-100")
    l.classList.add("opacity-40")
    })
    
    logos[index].classList.remove("opacity-40")
    logos[index].classList.add("opacity-100")
    
    image.classList.remove("opacity-0","translate-y-4")
    text.classList.remove("opacity-0","translate-y-4")
    
    },200)
    
    }
    
    function nextSlide(){
    index = (index + 1) % machines.length
    render()
    }
    
    function prevSlide(){
    index = (index - 1 + machines.length) % machines.length
    render()
    }
    
    nextBtn.onclick = nextSlide
    prevBtn.onclick = prevSlide
    
    logos.forEach(logo=>{
    logo.addEventListener("click",()=>{
    index = parseInt(logo.dataset.index)
    render()
    })
    })
    
    render()
    
    
    /* AUTO SLIDE */
    
    let auto
    
    function startAuto(){
    auto = setInterval(nextSlide, 10000)
    }
    
    function stopAuto(){
    clearInterval(auto)
    }
    
    startAuto()
    
    
    /* PAUSA AO PASSAR MOUSE NO BLOCO */
    
    machineBlock.addEventListener("mouseenter", stopAuto)
    machineBlock.addEventListener("mouseleave", startAuto)
    