<div class='flex items-center justify-center from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'>
    <div class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl'>
        <div class='w-50 mx-auto space-y-6'>

            <form action="#" method="POST" enctype="multipart/form-data" class="w-50">
                @csrf
                <h2 class="text-2xl font-bold ">So'rovingizni yuboring</h2>
                <p class="my-4 opacity-70">Taklif va shikoyatlariz bo'lsa, biz albbat mamnun bo'lamiz xar qanday
                    fikringizdan</p>
                <hr class="my-6">
                <label class="uppercase text-sm font-bold opacity-70">Mavzu</label>
                <input type="text"
                    class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none"
                    name="subject">
                <label class="uppercase text-sm font-bold opacity-70">Savol va takliflariz</label>
                <textarea type="text" class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded" name="message" rows="5" cols="30"></textarea>
                <input type="file" placeholder="rasm yoki pdf xolatda malumotlariz" name="file_url"><br>
                <button type="submit" style="padding: 10px 15px; background-color:green; color:#fff;">Yuborish</button>
            </form>

        </div>
    </div>
</div>
