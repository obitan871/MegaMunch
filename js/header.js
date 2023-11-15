const searchInput = document.querySelector('.header-search-input');

searchInput.addEventListener('keyup', function (e) {
  if (e.code === 'Enter') {
    let keywords = searchInput.value.trim();

    window.location.href = `list.php?search=${keywords}`;
  }
});