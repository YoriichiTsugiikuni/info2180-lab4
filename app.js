document.addEventListener('DOMContentLoaded', function() {
    const shazam = document.getElementById('search-btn');
    
    shazam.addEventListener('click', function() {
        const supaaman = new XMLHttpRequest();
        supaaman.open('GET', 'superheroes.php', true);
        
        supaaman.onload = function() {
            if (supaaman.status === 200) {
                alert(supaaman.responseText);
            }
        };
        
        supaaman.send();
    });
});