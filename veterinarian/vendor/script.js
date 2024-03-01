let currentMonth = new Date().getMonth();
let currentYear = new Date().getFullYear();

function generateCalendar() {
const yearInput = document.getElementById('year');
const year = parseInt(yearInput.value);
const tbody = document.querySelector('#calendar tbody');
tbody.innerHTML = '';
const date = new Date(year, currentMonth, 1);
const lastDay = new Date(year, currentMonth + 1, 0).getDate();
const firstDayIndex = date.getDay();

for (let i = 0; i < firstDayIndex; i++) {
    const td = document.createElement('td');
    tbody.appendChild(td);
}

for (let i = 1; i <= lastDay; i++) {
    const td = document.createElement('td');
    td.textContent = i;
    td.dataset.date = i;
    td.dataset.month = currentMonth;
    td.dataset.year = year;
    td.classList.add('available');
    td.addEventListener('click', function() {
        openPopup(this);
    });
    tbody.appendChild(td);
    if ((firstDayIndex + i - 1) % 7 === 6) {
        tbody.appendChild(document.createElement('tr'));
    }
}
updateMonthName();
}

function updateMonthName() {
const monthNames = [
    'January', 'February', 'March', 'April', 'May', 'June',
    'July', 'August', 'September', 'October', 'November', 'December'
];
const monthName = monthNames[currentMonth];
document.getElementById('month-name').textContent = monthName;
}



function openPopup(cell) {
    const popup = document.getElementById('popup');
    const dateText = cell.dataset.year + '-' + (parseInt(cell.dataset.month) + 1) + '-' + cell.dataset.date;
    document.getElementById('popup-date').textContent = dateText;
    popup.style.display = 'block';
    popup.dataset.cellId = cell.textContent;
}

function closePopup() {
    const popup = document.getElementById('popup');
    popup.style.display = 'none';
}

// Function to toggle availability of a cell
function toggleAvailability(cell) {
    if (cell.classList.contains('available')) {
        cell.classList.remove('available');
        cell.classList.add('unavailable');
    } else {
        cell.classList.remove('unavailable');
        cell.classList.add('available');
    }
}

// Function to set unavailable status for a range of hours
function setUnavailable() {
    const popup = document.getElementById('popup');
    const cellId = popup.dataset.cellId;
    const cell = document.querySelector('#calendar tbody td[data-date="' + cellId + '"]');

    toggleAvailability(cell);
    closePopup();
}

function setAvailable() {
    const popup = document.getElementById('popup');
    const cellId = popup.dataset.cellId;
    const cell = document.querySelector('#calendar tbody td[data-date="' + cellId + '"]');

    cell.classList.remove('unavailable');
    cell.classList.add('available');

    closePopup();
}

function previousMonth() {
    currentMonth--;
    if (currentMonth < 0) {
        currentMonth = 11;
        currentYear--;
    }
    generateCalendar(); // Regenerate the calendar
}

function nextMonth() {
    currentMonth++;
    if (currentMonth > 11) {
        currentMonth = 0;
        currentYear++;
    }
    generateCalendar(); // Regenerate the calendar
}

// Initial generation of the calendar
generateCalendar();

window.addEventListener('scroll', function() {
  var sidebar = document.getElementById('sidebar');
  var scrollPosition = window.scrollY;

  if (scrollPosition > 100) { // Adjust 100 to the scroll position where you want the sidebar to become fixed
      sidebar.style.position = 'fixed';
      sidebar.style.top = '0';
  } else {
      sidebar.style.position = 'absolute';
      sidebar.style.top = '0'; // Adjust this if you need a different initial top position
  }
});

function toggleDropdown(button) {
var dropdownContent = button.nextElementSibling;
if (dropdownContent.style.display === "block") {
    dropdownContent.style.display = "none";
} else {
    dropdownContent.style.display = "block";
}
}

// Close the dropdowns if the user clicks outside of them
window.onclick = function(event) {
if (!event.target.matches('.dropdown-toggle')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    for (var i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.style.display === "block") {
            openDropdown.style.display = "none";
        }
    }
}
}

function rowClicked(row) {
  // Add your desired actions here
  console.log("Row clicked:", row);
  // For example, you can navigate to a new page
  // window.location.href = "your_page_url";
}
