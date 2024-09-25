document.addEventListener("DOMContentLoaded", function(){
    const faqSections = document.querySelectorAll('.faq ul li');

    faqSections.forEach(section => {
        const question = section.querySelector('.question');
        const answer = section.querySelector('.answer');

        question.addEventListener('click', () => {
            
            answer.classList.toggle('show');

            
            if (answer.classList.contains('show')) {
                answer.classList.add('active');
            } else {
                answer.classList.remove('active');
            }
        });
    });
});