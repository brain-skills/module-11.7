setTimeout(function go() {
    function speak() {
        let text = 'Здравствуйте Алиса. Я очень старался. Надеюсь вам понравится моя практическая работа.';
        speechSynthesis.speak(new SpeechSynthesisUtterance(text));
    }
    speak();
}, 5000);