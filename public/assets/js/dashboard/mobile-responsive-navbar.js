function toggleSidebar() {
    const sidebar = document.getElementById('main-sidebar');
    const overlay = document.getElementById('sidebar-overlay');

    sidebar.classList.toggle('-translate-x-full');    
    overlay.classList.toggle('hidden');
}

function toggleSidebar() {
    const sidebar = document.getElementById('main-sidebar');
    const overlay = document.getElementById('sidebar-overlay');
    const mainContent = document.getElementById('main-content');
    
    sidebar.classList.toggle('-translate-x-full');
    
    overlay.classList.toggle('hidden');

    if (sidebar.classList.contains('-translate-x-full')) {
        mainContent.classList.remove('lg:ml-64');
        mainContent.classList.add('ml-0');
    } else {
        mainContent.classList.add('lg:ml-64');
        mainContent.classList.remove('ml-0');
    }
}