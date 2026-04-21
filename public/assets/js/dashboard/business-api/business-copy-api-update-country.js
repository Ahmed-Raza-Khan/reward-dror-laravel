function copyApiKey() {
    const copyText = document.getElementById("apiKeyInput");

    navigator.clipboard.writeText(copyText.value).then(() => {
        alert("API Key copied to clipboard!");
    }).catch(err => {
        console.error("Failed to copy: ", err);
    });
}

function updateCountry() {
    const select = document.getElementById('countryCode');
    const flagImg = document.getElementById('selectedFlag');
    const selectedOption = select.options[select.selectedIndex];
    const flagPath = selectedOption.getAttribute('data-flag');
    flagImg.src = flagPath;
}