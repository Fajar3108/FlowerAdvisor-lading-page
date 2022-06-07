const buttonCopy = document.querySelector('#buttonCopy');

const copyToClipboard = () => {
    const copyText = document.querySelector("#copyText");

    navigator.clipboard.writeText(copyText.textContent);

    alert(`Copied the text: ${copyText.textContent}`);
}

buttonCopy.addEventListener('click', copyToClipboard);
