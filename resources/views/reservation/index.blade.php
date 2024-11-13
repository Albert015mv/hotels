<x-app-layout>
    @vite('resources/css/app.css')
    <div class="relative overflow-x-auto p-8 bg-gray-100 dark:bg-gray-800 rounded-lg shadow-lg max-w-lg mx-auto mt-10">
        <form class="space-y-6">
            <table class="w-full text-sm text-left text-gray-700 dark:text-gray-300">
                <tbody>
                    <!-- Campo de Id -->
                    <tr class="border-b dark:border-gray-700">
                        <th class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-200 rounded-tl-lg">Id</th>
                        <td class="px-6 py-3">
                            <input type="text" id="id" class="w-full bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white rounded-lg p-2.5 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Id" required />
                        </td>
                    </tr>

                    <!-- Campo de Tourist Id -->
                    <tr class="border-b dark:border-gray-700">
                        <th class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-200">Tourist Id</th>
                        <td class="px-6 py-3">
                            <input type="text" id="tourist_id" class="w-full bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white rounded-lg p-2.5 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Tourist Id" required />
                        </td>
                    </tr>

                    <!-- Campo de Registration Date -->
                    <tr class="border-b dark:border-gray-700">
                        <th class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-200">Registration Date</th>
                        <td class="px-6 py-3">
                            <input type="date" id="registration_date" class="w-full bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white rounded-lg p-2.5 focus:outline-none focus:ring-2 focus:ring-blue-500" required />
                        </td>
                    </tr>

                    <!-- Campo de Number of People -->
                    <tr class="border-b dark:border-gray-700">
                        <th class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-200">Number of People</th>
                        <td class="px-6 py-3">
                            <input type="number" id="number_people" class="w-full bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white rounded-lg p-2.5 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Number of People" required />
                        </td>
                    </tr>

                    <!-- Campo de Room Number -->
                    <tr class="border-b dark:border-gray-700">
                        <th class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-200">Room Number</th>
                        <td class="px-6 py-3">
                            <input type="text" id="room_number" class="w-full bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white rounded-lg p-2.5 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Room Number" required />
                        </td>
                    </tr>

                    <!-- Campo de Days Stay -->
                    <tr class="border-b dark:border-gray-700">
                        <th class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-200">Days Stay</th>
                        <td class="px-6 py-3">
                            <input type="text" id="days_stay" class="w-full bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white rounded-lg p-2.5 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Days Stay" required />
                        </td>
                    </tr>

                    <!-- Campo de End Date -->
                    <tr>
                        <th class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-200 rounded-bl-lg">End Date</th>
                        <td class="px-6 py-3">
                            <input type="date" id="end_day" class="w-full bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white rounded-lg p-2.5 focus:outline-none focus:ring-2 focus:ring-blue-500" required />
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</x-app-layout>

<x-comments />