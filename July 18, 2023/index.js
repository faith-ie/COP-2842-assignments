function openPage(evt, pageName) {
  const tabcontents = document.querySelectorAll('.tabcontent');
  const tablinks = document.querySelectorAll('.tablinks');

  tabcontents.forEach((tab) => (tab.style.display = 'none'));
  tablinks.forEach((link) => link.classList.remove('active'));

  const selectedTabContent = document.getElementById(pageName);
  selectedTabContent.style.display = 'block';
  evt.currentTarget.classList.add('active');
}
