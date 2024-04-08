document.addEventListener("keydown", function (event) {
    if (event.key === "ArrowLeft" && document.getElementById("previous-button") !== null) {
        document.getElementById("previous-button").click();

        return;
    } else if (event.key === "ArrowRight" && document.getElementById("next-button") !== null) {
        document.getElementById("next-button").click();

        return;
    }
});

document.addEventListener("turbo:load", async (event) => {
    Turbo.setProgressBarDelay(2);

    Prism.highlightAll();
});
