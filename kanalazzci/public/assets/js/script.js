/*
 const kepek = [
 "img/2.jpg",
 "img/3.jpg"
 ];
 
 let aktIndex = 0
 
 function kepValtas(irany) {
 aktIndex += irany
 if (aktIndex < 0) aktIndex = kepek.length - 1
 if (aktIndex >= kepek.length) aktIndex = 0
 
 document.getElementById("galeriaKep").src = kepek[aktIndex]
 }
 */
class KepValto {
    constructor(kepek, kepElemId, eloreBtn, visszaBtn) {
        if (!Array.isArray(kepek) || kepek.length === 0) {
            throw new Error("A képek tömbje kötelező és nem lehet üres.");
        }

        this.kepek = kepek;
        this.aktIndex = 0;
        this.kepElem = document.getElementById(kepElemId);

        if (!this.kepElem) {
            throw new Error(`Nem található kép elem ezzel az ID-val: ${kepElemId}`);
        }

        this.frissitKep();
        
        document.getElementById(visszaBtn).addEventListener('click', () =>{
            this.valt(-1);
        });
        
        document.getElementById(eloreBtn).addEventListener('click', () => {
            this.valt(1);
        });
    }

    valt(irany) {
        this.aktIndex += irany;

        if (this.aktIndex < 0) {
            this.aktIndex = this.kepek.length - 1;
        } else if (this.aktIndex >= this.kepek.length) {
            this.aktIndex = 0;
        }

        this.frissitKep();
    }

    frissitKep() {
        this.kepElem.src = this.kepek[this.aktIndex];
    }
}


document.addEventListener("DOMContentLoaded", () => {
    const menuToggle = document.getElementById("menu-toggle")
    const navLinks = document.getElementById("nav-links")

    const heroSection = document.querySelector(".hero")
    const menuMainSection = document.querySelector(".menu-main")
    const contactMainSection = document.querySelector(".contact-main")
    const aboutSection = document.querySelector(".about-section")

    const offset = "200px"

    menuToggle?.addEventListener("click", () => {
        navLinks.classList.toggle("show")

        let marginValue
        if (navLinks.classList.contains("show")) {
            marginValue = offset
        } else {
            marginValue = "0"
        }

        if (heroSection)
            heroSection.style.marginTop = marginValue
        if (menuMainSection)
            menuMainSection.style.marginTop = marginValue
        if (contactMainSection)
            contactMainSection.style.marginTop = marginValue
        if (aboutSection)
            aboutSection.style.marginTop = marginValue
    })
})