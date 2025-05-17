const currentDomain = window.location.origin;
function redirectToSuccessPage() {
    window.location.href = `../success.php`;
}
const toasts = document.querySelector(".error-toast"),
    errorToastContent = {
        icon: `<svg class="icon icon-error" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                      d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                      clip-rule="evenodd" />
                  </svg>`,
        title: "Mesajul nu a fost trimis",
        message: "Completează cu atenție c\xe2mpurile marcate.",
        time: 5e3,
    };
function disableSubmitButton() {
    let e = document.querySelector(".button-contact-form");
    e.setAttribute("disabled", ""),
        setTimeout(() => {
            e.removeAttribute("disabled");
        }, 2e3);
}
function createNotification() {
    let e = errorToastContent.icon,
        t = errorToastContent.title,
        s = errorToastContent.message,
        r = document.createElement("div");
    r.classList.add("toast"),
        r.classList.add("error"),
        (r.innerHTML = `${e} <p><span class='title'>${t}</span>${s}</p>`),
        toasts.appendChild(r),
        setTimeout(() => {
            r.remove();
        }, errorToastContent.time);
}
const links = document.querySelectorAll(".js-scroll");
function smoothScroll(e) {
    e.preventDefault();
    let t = this.getAttribute("href"),
        s = document.querySelector(t).offsetTop + 24,
        r = document.querySelector("header").getBoundingClientRect().height;
    scroll({ top: s - r, behavior: "smooth" });
}
links.forEach((e) => {
    e.addEventListener("click", smoothScroll);
});
class FormValidator {
    constructor(e, t) {
        (this.form = e), (this.fields = t);
    }
    initialize() {
        this.validateOnEntry(), this.validateOnSubmit(), this.submitData();
    }
    validateOnSubmit() {
        let e = this;
        this.form.addEventListener("submit", async (t) => {
            t.preventDefault(),
                e.fields.forEach((t) => {
                    let s = document.querySelector(`#${t}`);
                    e.validateFields(s);
                });
        });
    }
    validateOnEntry() {
        let e = this;
        this.fields.forEach((t) => {
            let s = document.querySelector(`#${t}`);
            s.addEventListener("focusout", (t) => {
                e.validateFields(s);
            });
        });
    }
    validateFields(e) {
        if ("" === e.value.trim()) {
            let t = e.previousElementSibling.innerText.slice(0, -1).toLowerCase(),
                s = t.charAt(0).toUpperCase() + t.slice(1);
            this.setStatus(e, `C\xe2mpul ${s} trebuie completat`, "error");
            return;
        }
        this.setStatus(e, null, "success"),
        "name" === e.id && (/[a-zA-Z]/.test(e.value) ? this.setStatus(e, null, "success") : this.setStatus(e, "Te rog introdu un nume corect", "error")),
        "email" === e.type && (/\S+@\S+\.\S+/.test(e.value) ? this.setStatus(e, null, "success") : this.setStatus(e, "Te rog introdu o adresă de email corectă", "error")),
        "tel" === e.type && (/^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/.test(e.value) ? this.setStatus(e, null, "Success") : this.setStatus(e, "Te rog introdu un număr de telefon corect", "error"));
    }
    setStatus(e, t, s) {
        let r = e.parentElement.querySelector(".icon-success"),
            i = e.parentElement.querySelector(".icon-error"),
            a = e.parentElement.querySelector(".error-message");
        e.activeElement
            ? (e.addEventListener("focusout", () => {
                "success" === s && (i && i.classList.add("hidden"), a && (a.innerText = ""), r.classList.remove("hidden"), e.classList.remove("input-error"), e.classList.add("input-approved"));
            }),
                e.addEventListener("focusout", () => {
                    "error" === s && (r && r.classList.add("hidden"), (e.parentElement.querySelector(".error-message").innerText = t), i.classList.remove("hidden"), e.classList.remove("input-approved"), e.classList.add("input-error"));
                }))
            : ("success" === s && (i && i.classList.add("hidden"), a && (a.innerText = ""), r.classList.remove("hidden"), e.classList.remove("input-error"), e.classList.add("input-approved")),
            "error" === s && (r && r.classList.add("hidden"), (e.parentElement.querySelector(".error-message").innerText = t), i.classList.remove("hidden"), e.classList.remove("input-approved"), e.classList.add("input-error")));
    }
    submitData(e, t, s) {
        this.form.addEventListener("submit", async (e) => {
            e.preventDefault();
            let t = new FormData(this.form);
            try {
                let s = await fetch(`${currentDomain}/contactController.php`, { method: "POST", body: t, mode: "same-origin", cache: "no-cache", credentials: "same-origin" }),
                    r = await s.text(t);
                0 == r ? (createNotification(), disableSubmitButton()) : 1 == r && redirectToSuccessPage();
            } catch (i) {
                console.log(i.message);
            }
        });
    }
}
const fields = ["name", "email", "phone", "textarea"],
    validator = new FormValidator(form, fields);
validator.initialize();
