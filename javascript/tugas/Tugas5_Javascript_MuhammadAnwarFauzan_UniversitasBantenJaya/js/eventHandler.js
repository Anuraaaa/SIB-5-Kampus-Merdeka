
$(document).ready(function() {
    for (let i = 1; i <= 3; i++) {

        // Bird
        $(`#bird${i}`).click(function() {
            const audio = document.getElementById(`audiobird${i}`);
            if (audio.paused) {
                audio.play();
            } else {
                audio.pause();
                audio.currentTime = 0;
            }
        });

        // Animal Buas
        $(`#animalbuas${i}`).click(function() {
            const audio = document.getElementById(`audioanimalbuas${i}`);
            if (audio.paused) {
                audio.play();
            } else {
                audio.pause();
                audio.currentTime = 0;
            }
        });

        // Animal Ternak
        $(`#animalternak${i}`).click(function() {
            const audio = document.getElementById(`audioanimalternak${i}`);
            if (audio.paused) {
                audio.play();
            } else {
                audio.pause();
                audio.currentTime = 0;
            }
        });
    }
});