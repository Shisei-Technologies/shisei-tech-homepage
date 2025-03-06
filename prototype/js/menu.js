document.addEventListener("DOMContentLoaded", function () {
    const navbarCollapse = document.querySelector(".navbar-collapse");
    const navLinks = document.querySelectorAll(".navbar-nav a");

    // メニューのリンクをクリックしたらハンバーガーメニューを閉じる
    navLinks.forEach(link => {
        link.addEventListener("click", function () {
            if (window.innerWidth < 992) { // 992px以下（ハンバーガーメニュー時）のみ
                const bsCollapse = new bootstrap.Collapse(navbarCollapse, { toggle: false });
                bsCollapse.hide();
            }
        });
    });
});
