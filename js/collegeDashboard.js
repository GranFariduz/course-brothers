// Toggling the sidebar
const sidebarToggleButton = document.querySelector('.college_dashboard__navbar__left__toggle');
const sidebar = document.querySelector('.college_dashboard__body__sidebar');

const dashboardMainContainer = document.querySelector('.college_dashboard__container');

sidebarToggleButton.addEventListener('click', () => {
  sidebar.classList.toggle('college_dashboard__body__sidebar--inactive');
  dashboardMainContainer.classList.toggle('college_dashboard__container--nopad');
});

// Toggling account info
const accountButton = document.querySelector('.college_dashboard__navbar__right__title .fa-angle-down');
const accountInfo = document.querySelector('.college_dashboard__navbar__right__account');

accountButton.addEventListener('click', (e) => {
	accountInfo.classList.toggle('college_dashboard__navbar__right__account--active');
	e.stopPropagation();
}, false);


// For Rendering the chart
const chart = new CanvasJS.Chart("chart__container", {
	animationEnabled: true,
	theme: "dark2", // "light1", "light2", "dark1", "dark2"
	data: [{        
		type: "column",
		dataPoints: [      
			{ y: 10, label: "Total Admissions" },
			{ y: 7,  label: "Successful Admissions" },
			{ y: 2,  label: "Unsuccessful Admissions" },
			{ y: 1,  label: "Ongoing Admissions" }
		]
	}]
});

chart.render();