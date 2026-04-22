document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('previewModal');
    const pointInput = document.getElementById('pointInput');

    window.toggleModal = function() {
        if (modal) modal.classList.toggle('hidden');
    }

    window.updatePoints = function(amount) {
        let current = parseInt(pointInput.value) || 0;
        if(current + amount >= 0) {
            pointInput.value = current + amount;
        }
    }

    window.setPoints = function(val) {
        pointInput.value = val;
    }

    window.toggleDescription = function() {
        const moreText = document.getElementById("moreText");
        const btnText = document.getElementById("readMoreBtn");

        if (moreText && btnText) {
            if (moreText.classList.contains("hidden")) {
                moreText.classList.remove("hidden");
                btnText.innerHTML = "See less";
            } else {
                moreText.classList.add("hidden");
                btnText.innerHTML = ".... Readmore";
            }
        }
    };

    window.onclick = function(event) {
        if (event.target == modal) {
            toggleModal();
        }
    };
});