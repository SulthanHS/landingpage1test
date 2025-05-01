<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages - Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#1b2124] min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-white">Contact Messages</h1>
            <a href="{{ url('/') }}" class="text-yellow-300 hover:text-yellow-400">← Back to Website</a>
        </div>

        <div class="bg-white/5 backdrop-blur-sm rounded-lg shadow-xl overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="bg-white/10">
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">Email</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">Message</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">Date</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-white/10">
                        @forelse ($messages as $message)
                            <tr class="hover:bg-white/5">
                                <td class="px-6 py-4 whitespace-nowrap text-gray-300">{{ $message->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-300">{{ $message->email }}</td>
                                <td class="px-6 py-4 text-gray-300">{{ $message->message }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-300">{{ $message->created_at->format('M d, Y H:i') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-6 py-4 text-center text-gray-300">No messages found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
