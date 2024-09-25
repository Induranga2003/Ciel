document.addEventListener('DOMContentLoaded', function() {
    var countDownDates = [
        new Date("July 20, 2024 00:00:00").getTime(), // First countdown end date
        new Date("July 23, 2024 00:00:00").getTime()  // Second countdown end date
    ];
    var intervals = [null, null];

    function startCountdown(timerIndex) {
        if (intervals[timerIndex]) clearInterval(intervals[timerIndex]);

        intervals[timerIndex] = setInterval(function() {
            var now = new Date().getTime();
            var distance = countDownDates[timerIndex] - now;

            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("days" + (timerIndex + 1)).innerHTML = days;
            document.getElementById("hours" + (timerIndex + 1)).innerHTML = hours;
            document.getElementById("minutes" + (timerIndex + 1)).innerHTML = minutes;
            document.getElementById("seconds" + (timerIndex + 1)).innerHTML = seconds;

            if (distance < 0) {
                clearInterval(intervals[timerIndex]);
                document.getElementById("days" + (timerIndex + 1)).innerHTML = "00";
                document.getElementById("hours" + (timerIndex + 1)).innerHTML = "00";
                document.getElementById("minutes" + (timerIndex + 1)).innerHTML = "00";
                document.getElementById("seconds" + (timerIndex + 1)).innerHTML = "00";
            }
        }, 1000);
    }

    startCountdown(0);
    startCountdown(1);

    window.setNewCountdown = function(timerIndex) {
        var newDate = document.getElementById("newDate" + timerIndex).value;
        if (newDate) {
            countDownDates[timerIndex - 1] = new Date(newDate).getTime();
            startCountdown(timerIndex - 1);
        }
    }
});
