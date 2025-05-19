window.onload = () => {
    const searchInput = document.getElementById('searchInput');
    const itemsPool = document.querySelector('.prices-holder');
    const items = itemsPool.querySelectorAll('.pricing-table tr');
    const searchResults = document.querySelector('.search-result');

    searchInput.addEventListener('input', function () {
        const searchValue = searchInput.value.toLowerCase();

        items.forEach(item => {
            if (searchValue.includes(item.innerText)) {
                searchResults.innerText = item.innerText;
            }

        })

        // for (let i = 0; i < items.length; i++) {
        //     const item = items[i];
        //     const itemName = item.textContent.toLowerCase();
        // }
    });

}
