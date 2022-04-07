
## Trip Builder

Api documentation is in index.php

## Outline
An airline has a name and is identified by a IATA Airline Code.
Ex: Air Canada (AC)
An airport is a location identified by a IATA Airport Code. It also has a name, a city, latitude and
longitude coordinates, a timezone and a city code, the IATA Airport Code for a city, which may
differ from an airport code in larger areas.
Ex: Pierre Elliott Trudeau International (YUL) belongs to the Montreal (YMQ) city code.
A flight is uniquely numbered for a referenced airline. For the sake of simplicity, a flight is priced
for a single passenger (any gender, any type) in a neutral currency and is available every day of
the week. Timezones are also ignored. It references a pair of airports for departure and arrival.
Ex: AC301 from YUL to YVR departs at 7:35 AM (Montreal) and arrives at 10:05 AM (Vancouver).


Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Mission

Create an API to build and navigate trips for a single passenger using criteria such as
departure airport, departure dates and arrival airport. Be mindful of timezones!
A trip references one or many flights, each one departing after the arrival date of the previous
flight. A trip’s price is the sum of the prices of the referenced flights.
The following trip types MUST be supported:

- A one-way is a trip getting from A to B (i.e. 1+ flights)
- A round-trip is a trip getting from A to B, and then from B to A (i.e. 2+ flights)

## Tech Used

- Wamp
- PHP 7.4.0

