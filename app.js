document.addEventListener("DOMContentLoaded", () => {
    const searchBtn = document.getElementById("search-btn");
    const searchInput = document.getElementById("search-query");
    const resultDiv = document.getElementById("result");

    searchBtn.addEventListener("click", (event) => {
        event.preventDefault();

        const query = searchInput.value.trim();
        const url =
            query === ""
                ? "superheroes.php"
                : "superheroes.php?query=" + encodeURIComponent(query);

        fetch(url)
            .then((response) => {
                if (!response.ok) {
                    throw new Error("Network response was not ok");
                }
                return response.text();
            })
            .then((html) => {
                resultDiv.innerHTML = html;
            })
            .catch((error) => {
                console.error(error);
                resultDiv.innerHTML =
                    "<p>There was an error processing the request.</p>";
            });
    });
});
