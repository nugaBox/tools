document.addEventListener('DOMContentLoaded', function() {
    let currentTab = 'ott';

    // 카드 클릭 이벤트
    document.querySelectorAll('.card-box').forEach(function(element) {
        element.addEventListener('click', function() {
            const url = this.getAttribute('data-url');
            if (url) {
                redirectToYoutube(url);
            }
        });
    });

    // 초기 상태 설정 (OTT 탭 활성화)
    showCardList('ott', 'right');

    // 네비게이션 클릭 이벤트
    document.querySelectorAll('.nav-link').forEach(function(navLink) {
        navLink.addEventListener('click', function(e) {
            e.preventDefault();
            
            // 모든 nav-link에서 active 클래스 제거
            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('active');
            });
            
            // 클릭된 nav-link에 active 클래스 추가
            this.classList.add('active');
            
            // 클릭된 메뉴에 해당하는 card-list 표시
            const targetId = this.textContent.toLowerCase();
            
            // 슬라이드 방향 결정
            const direction = getSlideDirection(currentTab, targetId);
            showCardList(targetId, direction);
            currentTab = targetId;
        });
    });
});

function getSlideDirection(currentTab, newTab) {
    const tabs = ['ott', 'tv', 'streaming'];
    const currentIndex = tabs.indexOf(currentTab);
    const newIndex = tabs.indexOf(newTab);
    
    return newIndex > currentIndex ? 'right' : 'left';
}

function showCardList(targetId, direction) {
    // 모든 card-list 숨기기
    document.querySelectorAll('.card-list').forEach(list => {
        if (list.classList.contains('active')) {
            // 현재 활성화된 리스트를 반대 방향으로 슬라이드
            list.style.transform = `translateX(${direction === 'right' ? '-100%' : '100%'})`;
            list.style.opacity = '0';
            setTimeout(() => {
                list.classList.remove('active');
                list.style.display = 'none';
            }, 500);
        }
    });
    
    // 타겟 card-list 표시
    const targetList = document.getElementById(targetId);
    if (targetList) {
        targetList.style.display = 'flex';
        targetList.style.transform = `translateX(${direction === 'right' ? '100%' : '-100%'})`;
        
        // 강제 리플로우
        targetList.offsetHeight;
        
        targetList.classList.add('active');
        targetList.style.transform = 'translateX(0)';
        targetList.style.opacity = '1';
    }
}

function redirectToYoutube(url) {
    window.open('http://www.youtube.com/redirect?q=' + url);
}
