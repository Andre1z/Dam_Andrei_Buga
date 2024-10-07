import calendar
def display_calendar():
    year = int(input("Porfavor introduzca un año: "))
    month = int(input("Porfavor introduzca un mes (1-12): "))


    cal = calendar.TextCalendar(calendar.MONDAY)


    month_calendar = cal.formatmonth(year, month)
    print(month_calendar)


display_calendar()
