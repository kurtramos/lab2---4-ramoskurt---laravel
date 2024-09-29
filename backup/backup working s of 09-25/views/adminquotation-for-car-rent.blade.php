<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotation for Car Rent | KRCars</title>
</head>
<body>
    <h1>Quotation for Car Rent</h1>
    <p>Get a custom quote for renting a car.</p>
</body>
</html> -->


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quotation for Car Rent') }}
        </h2>
    </x-slot>


            <!-- Tailwind CSS CDN -->
            <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .header-bg {
            background-image: url('https://stylemixthemes.com/wp/wp-content/uploads/sites/2/2022/10/renting-calculator.jpg');
            background-size: cover;
            background-position: center;
            color: white;
        }
    </style>

    <header class="header-bg text-center py-12">
        <h1 class="text-4xl font-bold">Get a Custom Quote for Car Rent</h1>
        <p class="mt-4 text-lg">Fill out the form below to receive a rental quote for your desired car.</p>
    </header>

    <div class="container mx-auto mt-8 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Rental Quotation Form</h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">Enter your details to calculate the rental cost.</p>
            </div>
            <div class="border-t border-gray-200">
                <form id="rental-form" class="p-4" onsubmit="return calculateQuotation(event)">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 p-4">
                        <div>
                            <label for="carType" class="block text-sm font-medium text-gray-700">Car Type</label>
                            <select id="carType" name="carType" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                <option value="compact">Compact - $30/day</option>
                                <option value="sedan">Sedan - $50/day</option>
                                <option value="suv">SUV - $70/day</option>
                                <option value="luxury">Luxury - $100/day</option>
                            </select>
                        </div>
                        <div>
                            <label for="numberOfDays" class="block text-sm font-medium text-gray-700">Number of Days</label>
                            <input type="number" id="numberOfDays" name="numberOfDays" min="1" value="1" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        </div>
                        <div>
                            <label for="additionalOptions" class="block text-sm font-medium text-gray-700">Additional Options</label>
                            <div class="mt-1">
                                <input type="checkbox" id="gps" name="additionalOptions" value="gps" class="mr-2">
                                <label for="gps" class="text-sm text-gray-600">GPS - $10/day</label><br>
                                <input type="checkbox" id="insurance" name="additionalOptions" value="insurance" class="mr-2">
                                <label for="insurance" class="text-sm text-gray-600">Insurance - $15/day</label>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 border-t border-gray-200">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-blue-600">Calculate Quote</button>
                    </div>
                </form>
                <div id="quotationResult" class="p-4 border-t border-gray-200 hidden">
                    <h4 class="text-lg font-semibold text-gray-900">Estimated Rental Cost</h4>
                    <p id="totalCost" class="text-xl font-bold text-gray-800 mt-2">$0.00</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function calculateQuotation(event) {
            event.preventDefault();

            // Get form values
            const carType = document.getElementById('carType').value;
            const numberOfDays = parseInt(document.getElementById('numberOfDays').value);
            const gps = document.getElementById('gps').checked ? 10 : 0;
            const insurance = document.getElementById('insurance').checked ? 15 : 0;

            // Car type pricing
            let carPricePerDay;
            switch (carType) {
                case 'compact':
                    carPricePerDay = 30;
                    break;
                case 'sedan':
                    carPricePerDay = 50;
                    break;
                case 'suv':
                    carPricePerDay = 70;
                    break;
                case 'luxury':
                    carPricePerDay = 100;
                    break;
                default:
                    carPricePerDay = 0;
            }

            // Calculate total cost
            const totalCost = (carPricePerDay + gps + insurance) * numberOfDays;

            // Display result
            document.getElementById('totalCost').textContent = `$${totalCost.toFixed(2)}`;
            document.getElementById('quotationResult').classList.remove('hidden');
        }
    </script>
</x-app-layout>
