
    // Get the current month, year, and day from PHP
    let currentMonth = document.getElementById("currentMonth");
    let currentYear = document.getElementById("currentYear");
    let today = new Date(); // Get today's date

    const months = document.getElementById("months");
    const weekDays = document.getElementById("weekDays");

    // Array of festival dates with names (format: { date: "MM-DD", name: "Festival Name" })
    const festivalDates = [
        //     {
        //     date: "01-01",
        //     name: "New Year's Day"
        // },
        // {
        //     date: "12-25",
        //     name: "Christmas"
        // },
        // {
        //     date: "11-28",
        //     name: "Thanksgiving"
        // },
        // {
        //     date: "10-31",
        //     name: "Halloween"
        // },
        // Add more festival dates as needed
    ];


    // Function to generate the calendar for a given month and year
    function generateCalendar(month, year) {
        const firstDayOfMonth = new Date(year, month - 1, 1).getDay(); // Day of the week (0 for Sunday)
        const daysInMonth = new Date(year, month, 0).getDate(); // Number of days in the month

        // Set calendar title
        document.getElementById('calendar-title').innerHTML = `${months[month]} ${year}`;

        // Generate table for the calendar
        let calendarHtml = '<table class="table-bordered">';
        calendarHtml += '<thead class="fc-head"><tr>';

        // Print the week day headers
        weekDays.forEach(day => {
            calendarHtml += `<th class="fc-day-header">${day}</th>`;
        });

        calendarHtml += '</tr></thead><tbody class="fc-body"><tr>';

        let day = 1;

        // Loop through 6 weeks (maximum weeks in a month)
        for (let week = 0; week < 6; week++) {
            calendarHtml += "<tr>";

            // Loop through 7 days (Sunday to Saturday)
            for (let d = 0; d < 7; d++) {
                // Print empty cells before the first day of the month or after the last day
                if ((week === 0 && d < firstDayOfMonth) || day > daysInMonth) {
                    calendarHtml += '<td class="fc-day"></td>';
                } else {
                    // Check if the current day matches today's date
                    let isToday = (day === today.getDate() && month === today.getMonth() + 1 && year === today.getFullYear());
                    let isSunday = (d === 0); // Check if the day is Sunday (0 is Sunday)

                    // Check if the current day is a festival date
                    let formattedDate = `${month < 10 ? '0' + month : month}-${day < 10 ? '0' + day : day}`;
                    let festival = festivalDates.find(f => f.date === formattedDate); // Find the festival by date

                    // Apply classes for today, Sunday, and festival
                    let festivalHtml = festival ? `<div class="festival-name-box">${festival.name}</div>` : '';
                    calendarHtml += `<td class="fc-day ${isToday ? 'today' : ''} ${isSunday ? 'sunday' : ''}">
                        <span class="fc-day-number">${day}</span>${festivalHtml}</td>`;

                    day++;
                }
            }

            calendarHtml += "</tr>";

            // Break out of the loop if we've printed all days
            if (day > daysInMonth) break;
        }

        calendarHtml += '</tbody></table>';

        // Insert the generated calendar into the calendar content div
        document.getElementById('calendar-content').innerHTML = calendarHtml;
    }


    // Initial generation of the calendar
    generateCalendar(currentMonth, currentYear);

    // Handle the Next button click
    document.getElementById('nextMonth').addEventListener('click', () => {
        currentMonth++;
        if (currentMonth > 12) {
            currentMonth = 1;
            currentYear++;
        }
        generateCalendar(currentMonth, currentYear);
    });

    // Handle the Previous button click
    document.getElementById('prevMonth').addEventListener('click', () => {
        currentMonth--;
        if (currentMonth < 1) {
            currentMonth = 12;
            currentYear--;
        }
        generateCalendar(currentMonth, currentYear);
    });
