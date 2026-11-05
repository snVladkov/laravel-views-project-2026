<x-layout>
    <div class="max-w-5xl mx-auto px-4 py-12">
        <div class="text-center max-w-xl mx-auto mb-10">
            <h1 class="text-3xl font-bold text-gray-900">Get in Touch</h1>
            <p class="text-gray-600 mt-2">Have a question about a product or order? Drop us a line and our tech team will respond promptly.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Contact Information Info Cards -->
            <div class="space-y-4 md:col-span-1">
                <div class="bg-white p-5 rounded-xl border border-gray-200">
                    <h3 class="font-bold text-gray-800 text-sm uppercase tracking-wide">📍 Location</h3>
                    <p class="text-gray-600 text-sm mt-1">100 Tech Park Way, Suite 400<br>Silicon Valley, CA 94025</p>
                </div>
                
                <div class="bg-white p-5 rounded-xl border border-gray-200">
                    <h3 class="font-bold text-gray-800 text-sm uppercase tracking-wide">📞 Phone</h3>
                    <p class="text-gray-600 text-sm mt-1">+1 (800) 555-TECH</p>
                </div>

                <div class="bg-white p-5 rounded-xl border border-gray-200">
                    <h3 class="font-bold text-gray-800 text-sm uppercase tracking-wide">✉️ Email Support</h3>
                    <p class="text-gray-600 text-sm mt-1">support@techvolt.demo</p>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-white p-8 rounded-xl border border-gray-200 shadow-sm md:col-span-2">
                <form action="#" method="POST" class="space-y-5">
                    @csrf

                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                        <input type="text" id="name" name="name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition" placeholder="John Doe">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                        <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition" placeholder="john@example.com">
                    </div>

                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                        <select id="subject" name="subject" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
                            <option value="general">General Inquiry</option>
                            <option value="support">Technical Support</option>
                            <option value="returns">Returns & Refunds</option>
                        </select>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                        <textarea id="message" name="message" rows="4" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition" placeholder="Write your message here..."></textarea>
                    </div>

                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition shadow-md">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>