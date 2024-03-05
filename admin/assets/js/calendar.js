// Function to display the selected date
function displaySelectedDate(dateElement, selectedDate) {
    dateElement.textContent = "Selected Date: " + selectedDate;
}

document.addEventListener('DOMContentLoaded', function() {
    // Get the pets dropdown menu
    const petsDropdown = document.getElementById('pets');

    // Add event listener to the pets dropdown menu
    petsDropdown.addEventListener('change', function() {
        console.log("Dropdown value changed");
        const numberOfPets = parseInt(this.value);
        const petFormsContainer = document.getElementById('petFormsContainer');

        // Clear any existing pet info forms
        petFormsContainer.innerHTML = '';

        // Dynamically create and append pet info forms based on the selected number of pets
        for (let i = 1; i <= numberOfPets; i++) {
            const petForm = document.createElement('div');
            petForm.innerHTML = `
                <div class="pet-info-form">
                    <h3>Pet ${i} Details</h3>
                    <label for="petName${i}">Name:</label>
                    <input type="text" id="petName${i}" name="petName${i}" required><br><br>
                    <label for="petType${i}">Type:</label>
                    <input type="text" id="petType${i}" name="petType${i}" required><br><br>
                    <!-- Add additional fields for sex, breed, birth date, services, vet, and other concerns -->
                </div>
            `;
            petFormsContainer.appendChild(petForm);
        }
    });

    const prevMonthBtn = document.getElementById('prevMonthBtn');
    const nextMonthBtn = document.getElementById('nextMonthBtn');
    const currentMonthYear = document.getElementById('currentMonthYear');
    const calendarBody = document.getElementById('calendarBody');

    let currentDate = new Date();
    let currentMonth = currentDate.getMonth();
    let currentYear = currentDate.getFullYear();

    function generateCalendar(month, year) {
        currentMonthYear.textContent = `${getMonthName(month)} ${year}`;
        calendarBody.innerHTML = '';

        const firstDayOfMonth = new Date(year, month, 1).getDay();
        const daysInMonth = new Date(year, month + 1, 0).getDate();

        for (let i = 0; i < firstDayOfMonth; i++) {
            const emptyCell = document.createElement('div');
            emptyCell.classList.add('calendar-cell');
            calendarBody.appendChild(emptyCell);
        }

        for (let i = 1; i <= daysInMonth; i++) {
            const calendarCell = document.createElement('div');
            calendarCell.classList.add('calendar-cell');
            calendarCell.textContent = i;
            calendarCell.addEventListener('click', () => {
                const selectedDate = new Date(year, month, i);
                alert(`You clicked on ${getMonthName(month)} ${i}, ${year} at ${selectedDate.toDateString()}`);
            });
            calendarBody.appendChild(calendarCell);
        }
    }

    function getMonthName(month) {
        const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        return months[month];
    }

    prevMonthBtn.addEventListener('click', () => {
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        generateCalendar(currentMonth, currentYear);
    });

    nextMonthBtn.addEventListener('click', () => {
        currentMonth++;
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        generateCalendar(currentMonth, currentYear);
    });

    generateCalendar(currentMonth, currentYear);

    const timeSlots = document.querySelectorAll('.time-slot');

    timeSlots.forEach(timeSlot => {
        timeSlot.addEventListener('click', () => {
            const selectedDate = document.querySelector('.calendar-cell.selected');
            if (selectedDate) {
                const selectedTime = timeSlot.dataset.time; // Get the time from the data-time attribute
                const formattedDate = formatDate(new Date(currentYear, currentMonth, parseInt(selectedDate.textContent)));
                openModal(formattedDate, selectedTime);
            } else {
                alert('Please select a date from the calendar first.');
            }
        });
    });
    calendarBody.addEventListener('click', (event) => {
        const selectedDate = document.querySelector('.calendar-cell.selected');
        if (selectedDate) {
            selectedDate.classList.remove('selected');
        }
        if (event.target.classList.contains('calendar-cell')) {
            event.target.classList.add('selected');
            const formattedDate = formatDate(new Date(currentYear, currentMonth, parseInt(event.target.textContent)));
            displaySelectedDate(document.getElementById("selectedDateDisplay"), formattedDate);
        }
    });

    // Prevent form submission for now
    document.getElementById("bookingForm").addEventListener("submit", function(event) {
        event.preventDefault();
    });

    function openModal(selectedDate, selectedTime) {
        document.getElementById("selectedDateTime").textContent = "Selected Date: " + selectedDate + ", Selected Time Slot: " + selectedTime;
    }

});

// Get the modal
var modal = document.getElementById("registrationModal");

// Get the button that opens the modal
var btn = document.getElementById("registerBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Handle form submission
document.getElementById("registrationForm").addEventListener("submit", function(event) {
  event.preventDefault(); // Prevent default form submission
  // You can add your registration form submission logic here
  alert("Registration successful!"); // For demonstration purposes
  modal.style.display = "none"; // Close the modal after registration
});

const myModal = new bootstrap.Modal(document.getElementById('myModal'), options)
// or
const myModalAlternative = new bootstrap.Modal('#myModal', options)

  
$(document).ready(function(){
    $('.pass_show').append('<span class="ptxt">Show</span>');  
    });
      
    
    $(document).on('click','.pass_show .ptxt', function(){ 
    
    $(this).text($(this).text() == "Show" ? "Hide" : "Show"); 
    
    $(this).prev().attr('type', function(index, attr){return attr == 'password' ? 'text' : 'password'; }); 
    
    });  