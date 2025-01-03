document.addEventListener('DOMContentLoaded', function() {
    // ott-card-box 클래스를 가진 모든 요소에 클릭 이벤트 리스너 추가
    document.querySelectorAll('.ott-card-box').forEach(function(element) {
        element.addEventListener('click', function() {
            const url = this.getAttribute('data-url');
            if (url) {
                redirectToYoutube(url);
            }
        });
    });
});

function redirectToYoutube(url) {
    window.open('http://www.youtube.com/redirect?q=' + url);
}
