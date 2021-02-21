function render_dashboard() {
    console.log("Dashbaord")
    document.getElementById("dashboard").style.display = "block";
    document.getElementById("users").style.display = "none";
    document.getElementById("products").style.display = "none";
    document.getElementById("clients").style.display = "none";
    document.getElementById("reports").style.display = "none";
    activeClass("dashboard_link")
}

function render_users() {
    console.log("Users")
    document.getElementById("dashboard").style.display = "none";
    document.getElementById("users").style.display = "block";
    document.getElementById("products").style.display = "none";
    document.getElementById("clients").style.display = "none";
    document.getElementById("reports").style.display = "none";
    activeClass("users_link")
}

function render_products() {
    console.log("products")
    document.getElementById("dashboard").style.display = "none";
    document.getElementById("users").style.display = "none";
    document.getElementById("products").style.display = "block";
    document.getElementById("clients").style.display = "none";
    document.getElementById("reports").style.display = "none";
    activeClass("products_link")
}

function render_clients() {
    console.log("Clients")
    document.getElementById("dashboard").style.display = "none";
    document.getElementById("users").style.display = "none";
    document.getElementById("products").style.display = "none";
    document.getElementById("clients").style.display = "block";
    document.getElementById("reports").style.display = "none";
    activeClass("clients_link")
}

function render_reports() {
    console.log("Reports")
    document.getElementById("dashboard").style.display = "none";
    document.getElementById("users").style.display = "none";
    document.getElementById("products").style.display = "none";
    document.getElementById("clients").style.display = "none";
    document.getElementById("reports").style.display = "none";
    activeClass("reports_link")
}

function activeClass(e) {
    var elems = document.querySelectorAll(".active");
    [].forEach.call(elems, function(el) {
        el.classList.remove("active");
    });
    document.getElementById(e).classList.add("active")

}