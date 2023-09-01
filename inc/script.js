const nav = document.querySelector('nav');
   nav.style.backgroundColor='purple';
window.addEventListener('scroll',()=>{
    if(window.pageYOffset >100){
        
        nav.classList.add('bg-opacity-75')
    }else{
       
        nav.classList.remove('bg-opacity-75')
    }
}); 


const click_to_add_book_to_database = document.querySelector('.click_to_add_book_to_database');
const section_form = document.querySelector('.section-form');


click_to_add_book_to_database.addEventListener('click',(e)=>{
if(e.target.classList.contains('click_to_add_book_to_database')){
section_form.classList.remove('d-none');
click_to_add_book_to_database.classList.add('add_book_active');
window.scrollTo(0, 0);
console.log('Script file loaded oooo.');
}
else{click_to_add_book_to_database.classList.remove('add_book_active');
section_form.classList.add('d-none');}
});

const submitButton = document.querySelector('input[name="submit"]');
