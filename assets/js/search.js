document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.getElementById("search");
    const suggestionsBox = document.getElementById("suggestions");

    searchInput.addEventListener("input", function() {
        const query = searchInput.value;
        if (query.length > 0) {
            fetch(`search_suggestions.php?query=${query}`)
                .then(response => response.json())
                .then(data => {
                    suggestionsBox.innerHTML = "";
                    data.forEach(item => {
                        const div = document.createElement("div");
                        div.textContent = item;
                        div.addEventListener("click", function() {
                            searchInput.value = item;
                            suggestionsBox.innerHTML = "";
                        });
                        suggestionsBox.appendChild(div);
                    });
                });
        } else {
            suggestionsBox.innerHTML = "";
        }
    });
});