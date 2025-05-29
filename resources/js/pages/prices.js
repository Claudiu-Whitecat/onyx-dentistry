
    if(document.querySelector('.pricing-page')) {
        const priceDetail = document.querySelector('.price-category:first-of-type');
        priceDetail.setAttribute('open', 'open');
        const itemsPool = document.querySelectorAll('.prices-holder .pricing-table tbody tr');
        const items = Array.from(itemsPool);
        const searchInput = document.getElementById('searchInput');
        const resultsContainer = document.querySelector('.search-result table');

        function debounce(func, wait) {
            let timeout;
            return function(...args) {
                clearTimeout(timeout);
                timeout = setTimeout(() => func.apply(this, args), wait);
            };
        };
        const debouncedSearch = debounce(() => {
            const query = searchInput.value.trim();
            const results = search(query);
            displayResults(results);
        }, 300);

        function normalizeString(str) {
            return str
                .normalize("NFD")
                .replace(/[\u0300-\u036f]/g, "")
                .toLowerCase();
        };
        function search(query) {
            return items.filter(item =>
                normalizeString(item.innerHTML).includes(normalizeString(query))
            );
        }

        function displayResults(results) {
            resultsContainer.innerHTML = '';

            if (results.length === 0) {
                resultsContainer.innerHTML = '<p class="query-text">Nu am găsit această procedură</p>';
                return;
            }
            if (results.length > 0) {
                resultsContainer.innerHTML = '<p class="query-text-result">Proceduri găsite:</p>';
            }
            results.forEach(item => {
                const itemElement = document.createElement('tr');
                itemElement.classList.add('item');
                itemElement.innerHTML = item.innerHTML;
                resultsContainer.appendChild(itemElement);
                if (searchInput.value === '') {
                    resultsContainer.innerHTML = '';
                }
            });
        }

        searchInput.addEventListener('input', debouncedSearch);

    }

