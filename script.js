
document.querySelector('.c-hamburger').addEventListener('click', function (e) {
    let mobileMenu = document.getElementById('mobile-menu');
    e.preventDefault();
    this.classList.toggle('is-active')
    if (mobileMenu.style.display !== 'block') {
        mobileMenu.style.display = 'block';
    }
    else {
        mobileMenu.style.display = 'none';
    }

})
let companyClick = document.querySelectorAll('.company');
companyClick.forEach(function (clickFunck) {
    clickFunck.addEventListener('click', function (idFunc) {
        let companyFix = document.getElementById('company_fix');
        let mobileMenu = document.querySelector('.mobile-menu__content');
        let companyTitle = document.querySelector('.company-fix__title');
        let companyOne = document.getElementById('company_one');
        let companyTwo = document.getElementById('company_two');
        let companyThree = document.getElementById('company_three');
        idFunc.preventDefault();
        companyFix.style.display = 'flex';
        mobileMenu.style.margin = '50px 0 0 50px';
        if (clickFunck == companyOne) {
            companyTitle.innerHTML = 'Sponge D&D'
        } else if (clickFunck == companyTwo) {
            companyTitle.innerHTML = 'Oxogent'
        } else if (clickFunck == companyThree) {
            companyTitle.innerHTML = 'Science Official'
        } else {
            companyTitle.innerHTML = 'Boom';
        }
    })
})


const cardCompany = function (logo, name, description) {
    return '<div class="company_content">\
          <div class="company-img" id="company_img">'+ logo + '</div>\
          <h4 class="company__name">'+ name + '</h4>\
          <p class="company__description">'+ description + '</p>\
         </div>\
    ';
};

