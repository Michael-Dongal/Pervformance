// public/js/main.js
// Runs on every page (it is loaded by layouts/app.blade.php).
// IMG_URL is defined in the layout and points to the public/images folder.

// WhatsApp number: international format, no "+" or spaces
var WA_NUMBER = "6285156070332";
var DEFAULT_MSG = "Hello Pervformance, I’d like to place an order / book an appointment.";

function wa(message) {
  return "https://wa.me/" + WA_NUMBER + "?text=" + encodeURIComponent(message);
}

// small helper: create an element with a class and text
function mk(tag, cls, text) {
  var e = document.createElement(tag);
  if (cls) e.className = cls;
  if (text) e.textContent = text;
  return e;
}

// show an image inside a box; if the file does not exist, show the fallback text instead
function photo(box, file, fallback, alt) {
  box.textContent = "";
  if (!file) { box.textContent = fallback; return; }
  var img = document.createElement("img");
  img.alt = alt || "";
  img.onerror = function () { box.textContent = fallback; };
  img.src = IMG_URL + file;
  box.appendChild(img);
}

/* ---------- Products dropdown in the navbar ---------- */
var dd = document.getElementById("dd");
var ddBtn = document.getElementById("dd-btn");

function setOpen(open) {
  dd.setAttribute("data-open", open);
  ddBtn.setAttribute("aria-expanded", open);
}
ddBtn.addEventListener("click", function (e) {
  e.stopPropagation();
  setOpen(dd.getAttribute("data-open") !== "true");
});
document.addEventListener("click", function (e) {
  if (!dd.contains(e.target)) setOpen(false);
});

/* ---------- Popup (modal) ---------- */
var modal = document.getElementById("modal");
var mBody = document.getElementById("m-body");
var mX = document.getElementById("m-x");

function openModal() {
  modal.classList.add("open");
  document.body.style.overflow = "hidden";
  mX.focus();
}
function closeModal() {
  modal.classList.remove("open");
  document.body.style.overflow = "";
}
mX.addEventListener("click", closeModal);
modal.addEventListener("click", function (e) {
  if (e.target === modal) closeModal();
});

/* ---------- "Open WhatsApp?" confirmation ---------- */
var conf = document.getElementById("confirm");
var cGo = document.getElementById("c-go");
var cCancel = document.getElementById("c-cancel");

function askWA(url) {
  cGo.href = url;
  conf.classList.add("open");
  document.body.style.overflow = "hidden";
  cGo.focus();
}
function closeConfirm() {
  conf.classList.remove("open");
  if (!modal.classList.contains("open")) document.body.style.overflow = "";
}
// make a link ask for confirmation before it leaves the page
function confirmLink(a) {
  if (a._c) return a;
  a._c = 1;
  a.addEventListener("click", function (e) {
    e.preventDefault();
    askWA(a.href);
  });
  return a;
}
cCancel.addEventListener("click", closeConfirm);
cGo.addEventListener("click", closeConfirm);
conf.addEventListener("click", function (e) {
  if (e.target === conf) closeConfirm();
});

// Escape key closes everything
document.addEventListener("keydown", function (e) {
  if (e.key === "Escape") {
    setOpen(false);
    closeModal();
    closeConfirm();
  }
});

// a WhatsApp link that opens the confirmation first
function waBtn(label, message, cls) {
  var a = mk("a", cls || "btn", label);
  a.href = wa(message);
  a.target = "_blank";
  a.rel = "noopener";
  return confirmLink(a);
}

/* ---------- Links in the pages with the attribute data-wa ---------- */
document.querySelectorAll("[data-wa]").forEach(function (a) {
  a.href = wa(DEFAULT_MSG);
  confirmLink(a);
});

/* ---------- Product popups ---------- */
function gallery(labels, flat) {
  var g = mk("div", flat ? "gal flat" : "gal");
  labels.forEach(function (text) {
    g.appendChild(mk("div", "ph", text));
  });
  return g;
}

// kind "proof": finished work
function showProof(p) {
  mBody.innerHTML = "";
  var h = mk("h3", "", p.name);
  h.id = "m-title";
  mBody.appendChild(h);
  mBody.appendChild(mk("p", "sub", "Fresh from our workshop. " + p.desc));
  mBody.appendChild(gallery(["PHOTO / VIDEO"]));
  if (p.req) {
    mBody.appendChild(waBtn("Other car models welcome. Request yours and we’ll customize it just for you.",
      "Hello Pervformance, I’d like to request " + p.name + " for my car (a different model).", "other"));
  } else {
    mBody.appendChild(waBtn("Ask on WhatsApp", "Hello Pervformance, I’d like to ask about " + p.name + ".", "btn solid"));
  }
  openModal();
}

// kind "variants": pick a style and preview it
function showVariants(p) {
  mBody.innerHTML = "";
  var h = mk("h3", "", p.name);
  h.id = "m-title";
  mBody.appendChild(h);
  mBody.appendChild(mk("p", "sub", "Tap a style to preview it."));

  var view = mk("div", "pv");
  var row = mk("div", "vars");
  var btns = [];

  function pick(i) {
    var v = p.variants[i];
    photo(view, v.image, "PHOTO · " + v.name.toUpperCase(), p.name + " - " + v.name);
    btns.forEach(function (b, j) {
      b.classList.toggle("on", j === i);
      b.setAttribute("aria-pressed", j === i);
    });
  }

  p.variants.forEach(function (v, i) {
    var b = mk("button", "vbtn", v.name);
    b.type = "button";
    b.addEventListener("click", function () { pick(i); });
    btns.push(b);
    row.appendChild(b);
  });

  mBody.appendChild(view);
  mBody.appendChild(row);
  mBody.appendChild(waBtn("Ask about " + p.name,
    "Hello Pervformance, I’d like to ask about " + p.name + ". Which styles are available?", "btn solid"));
  pick(0);
  openModal();
}

// kind "types": a gallery of styles
function showTypes(p) {
  mBody.innerHTML = "";
  var h = mk("h3", "", p.name);
  h.id = "m-title";
  mBody.appendChild(h);
  mBody.appendChild(mk("p", "sub", "Pick your style, then hit us up on WhatsApp."));
  mBody.appendChild(gallery(["STYLE 1", "STYLE 2", "STYLE 3", "STYLE 4"], true));
  mBody.appendChild(waBtn("Ask about " + p.name,
    "Hello Pervformance, I’d like to ask about " + p.name + ". Which styles are available?", "btn solid"));
  openModal();
}

// the buttons on the product cards (data comes from the data-... attributes written by Blade)
document.querySelectorAll("[data-kind]").forEach(function (btn) {
  btn.addEventListener("click", function () {
    var p = {
      name: btn.dataset.name,
      desc: btn.dataset.desc,
      req: btn.dataset.req === "1",
      variants: btn.dataset.variants ? JSON.parse(btn.dataset.variants) : []
    };
    if (btn.dataset.kind === "proof") showProof(p);
    else if (btn.dataset.kind === "variants") showVariants(p);
    else showTypes(p);
  });
});

// "Can't find what you're looking for?" on the products pages
var helpLink = document.getElementById("help-link");
if (helpLink) {
  helpLink.addEventListener("click", function () {
    askWA(wa("Hello Pervformance, I couldn’t find what I’m looking for in " + helpLink.dataset.category + ". Could you help me?"));
  });
}

/* ---------- Consignment popup (button in the navbar) ---------- */
function showConsign() {
  mBody.innerHTML = "";
  var h = mk("h3", "", "Consignment");
  h.id = "m-title";
  mBody.appendChild(h);
  mBody.appendChild(mk("p", "sub", "Got premium car gear you’re ready to pass on? Let us put it in front of the right buyers."));

  var ol = mk("ol", "steps");
  [["Send the details", "Share photos, condition, and your asking price on WhatsApp."],
   ["We review it", "Our team checks the item and agrees on the terms with you."],
   ["We showcase it", "Your item gets displayed and promoted to our community."],
   ["Get paid", "Once it sells, your payout is on its way."]].forEach(function (s) {
    var li = mk("li");
    var d = mk("div");
    d.appendChild(mk("b", "", s[0]));
    d.appendChild(mk("span", "", s[1]));
    li.appendChild(d);
    ol.appendChild(li);
  });
  mBody.appendChild(ol);

  mBody.appendChild(mk("p", "fine", "Open to lighting, accessories, and performance parts in great condition. Terms are confirmed per item."));
  mBody.appendChild(waBtn("Start a consignment", "Hello Pervformance, I’d like to consign an item.", "btn solid"));
  openModal();
}
document.getElementById("consign-btn").addEventListener("click", showConsign);