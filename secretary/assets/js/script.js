let selectedDate = null;
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
    updateMonthName(); // Update the month name
}

function updateMonthName() {
    const monthNames = [
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
    ];
    const monthName = monthNames[currentMonth];
    document.getElementById('month-name').textContent = monthName;
}

document.getElementById('calendar').addEventListener('click', function(event) {
    if (event.target.tagName === 'TD' && event.target.dataset.date) {
        const selectedDate = new Date(currentYear, currentMonth, parseInt(event.target.dataset.date));
        updateSelectedDate(selectedDate); // Update the selectedDate
        openPopup(event.target); // Open the popup
        const dayOfWeek = selectedDate.toLocaleDateString('en-US', { weekday: 'long' }).toLowerCase();
        generateTimeSlots(dayOfWeek);
    }
});

// Function to open the popup
function openPopup(cell) {
    const popup = document.getElementById('popup');
    if (selectedDate !== null) {
        const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        const dateParts = selectedDate.split('-');
        const monthName = monthNames[parseInt(dateParts[1]) - 1];
        const formattedDate = monthName + ' ' + dateParts[2] + ', ' + dateParts[0];
        document.getElementById('popup-date').textContent = formattedDate;
        popup.style.display = 'block'; // Ensure the popup is displayed
        popup.dataset.cellId = cell.textContent;
    }
}

// Function to close the popup
function closePopup() {
    const popup = document.getElementById('popup');
    popup.style.display = 'none'; // Close the popup
}
function selectDate(date) {
    selectedDate = date;
}
// Function to generate the years range and populate the dropdown
function generateYearDropdown() {
    const yearSelect = document.getElementById('year');
    const currentYear = new Date().getFullYear();
    const yearsRange = 10; // You can adjust this range as needed

    // Clear existing options
    yearSelect.innerHTML = '';

    // Populate the dropdown with options for each year in the range
    for (let i = currentYear - yearsRange; i <= currentYear + yearsRange; i++) {
        const option = document.createElement('option');
        option.value = i;
        option.textContent = i;
        yearSelect.appendChild(option);
    }

    // Set the default selected year to the current year
    yearSelect.value = currentYear;

    // Generate the calendar for the default selected year (current year)
    generateCalendar();
}




// Call the function to generate the year dropdown
generateYearDropdown()
function toggleAvailability(cell) {
    if (cell.classList.contains('available')) {
        cell.classList.remove('available');
        cell.classList.add('unavailable');
    } else {
        cell.classList.remove('unavailable');
        cell.classList.add('available');
    }
}

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

// Function to update the selected date input field
function updateSelectedDate(date) {
    selectedDate = date.getFullYear() + '-' + (date.getMonth() + 1) + '-' + date.getDate();
}



// Call the function to generate the year dropdown initially
generateYearDropdown();
generateCalendar();
updateMonthName();
