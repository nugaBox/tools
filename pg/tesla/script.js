// Tailwind 설정 확장
tailwind.config = {
    darkMode: 'class',
    theme: {
        extend: {
            animation: {
                'gradient': 'gradient 8s linear infinite',
            },
            keyframes: {
                gradient: {
                    '0%, 100%': {
                        'background-size': '200% 200%',
                        'background-position': 'left center'
                    },
                    '50%': {
                        'background-size': '200% 200%',
                        'background-position': 'right center'
                    }
                }
            }
        }
    }
}

// 테마 관리 함수
function initTheme() {
    const theme = localStorage.getItem('theme') || 'system';
    if (theme === 'dark' || (theme === 'system' && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark');
    }
    updateActiveButton(theme);
}

function setTheme(theme) {
    localStorage.setItem('theme', theme);
    if (theme === 'system') {
        if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    } else if (theme === 'dark') {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark');
    }
    updateActiveButton(theme);
}

function updateActiveButton(theme) {
    document.querySelectorAll('.theme-button').forEach(button => {
        button.classList.remove('bg-gray-200', 'dark:bg-gray-700');
        if (button.dataset.theme === theme) {
            button.classList.add('bg-gray-200', 'dark:bg-gray-700');
        }
    });
}

// 시스템 테마 변경 감지
window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
    if (localStorage.getItem('theme') === 'system') {
        initTheme();
    }
});

// DOM 로드 시 테마 초기화
document.addEventListener('DOMContentLoaded', initTheme); 