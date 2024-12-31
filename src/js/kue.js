function updateContent(category) {
  const contentContainer = document.getElementById("content-container");
  contentContainer.innerHTML = ""; 

  if (categories[category]) {
    categories[category].forEach(item => {
      const contentHTML = `
        <div class="bg-white rounded-lg shadow-lg p-4 w-60 flex flex-col gap-5 justify-center items-center" >
          <img src="${item.image}" alt="${item.title}" class="w-24 h-24 object-cover rounded-md mb-4" >
          <h3 class="text-lg font-bold">${item.title}</h3>
          <p class="text-sm text-gray-600">${item.description}</p>
          <p class="text-red-500 font-bold mt-2">Rp${new Intl.NumberFormat('id-ID').format(item.price)}</p>
        </div>
      `;
      contentContainer.innerHTML += contentHTML;
    });
  } else {
    contentContainer.innerHTML = `<p class="text-center text-gray-500">Tidak ada item untuk kategori ini.</p>`;
  }
  AOS.refresh();
}

document.querySelectorAll('[data-category]').forEach(item => {
  item.addEventListener('click', function() {
    const category = this.dataset.category;

    updateContent(category);

    document.querySelectorAll('[data-category]').forEach(i => i.classList.remove('bg-red-300'));
    this.classList.add('bg-red-300');
  });
});

updateContent("birthday");