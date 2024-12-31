document.addEventListener('DOMContentLoaded', () => {
    const menuItems = Array.from(document.querySelectorAll('.menu-item'));
    const filterCategory = document.getElementById('filter-category');
    const searchInput = document.querySelector('[name="search"]');

    const filterMenu = () => {
        const selectedCategory = filterCategory.value;
        const searchText = searchInput.value.toLowerCase();

        menuItems.forEach(item => {
            const itemCategory = item.dataset.category;
            const itemTitle = item.dataset.title;

            const matchesCategory = selectedCategory === 'all' || itemCategory === selectedCategory;
            const matchesSearch = itemTitle.includes(searchText);

            if (matchesCategory && matchesSearch) {
                item.style.display = '';
            } else {
                item.style.display = 'none';
            }
        });
    };

    filterCategory.addEventListener('change', filterMenu);
    searchInput.addEventListener('input', filterMenu);
});