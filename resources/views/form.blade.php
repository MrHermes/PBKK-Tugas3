<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Form PBKK</title>
    @vite('resources/css/app.css')
</head>
<body>
  <div class="mx-auto w-fit mt-48 bg-pink-600 px-5 py-3 rounded-xl">
    <form method="POST" action="/" class="w-fit space-y-5" enctype="multipart/form-data">
          @csrf
          <h1 class="text-center font-bold my-2 bg-white">Simple Form for PBKK Assignment</h1>

          <div class="w-[100%]">
            <div class="">
              <label for="name" class="font-bold text-pink-800">Name : </label>
              <input type="text" id="name" name="name" placeholder="Enter name" class="bg-transparent placeholder-pink-300 w-full" />
              @error('name')
              <p class="text-red-500">{{ $message }}</p>
              @enderror
            </div>

            <div class="">
              <label for="email" class="font-bold text-pink-800">Email : </label>
              <input type="email" id="email" name="email" placeholder="Enter your email" class="bg-transparent placeholder-pink-300 w-full" />
              @error('email')
              <p class="text-red-500">{{ $message }}</p>
              @enderror
            </div>

            <div class="">
              <label for="password" class="font-bold text-pink-800">Password : </label>
              <input type="password" id="password" name="password" placeholder="Enter password" class="bg-transparent placeholder-pink-300 w-full" />
              @error('password')
              <p class="text-red-500">{{ $message }}</p>
              @enderror
            </div>

            <div class="">
              <label for="value" class="font-bold text-pink-800">Value (From 2.50 to 99.99) : </label>
              <input type="text" id="value" name="value" placeholder="Enter value" class="bg-transparent placeholder-pink-300 w-full" />
              @error('float')
              <p class="text-red-500">{{ $message }}</p>
              @enderror
            </div>

            <div class="">
              <label for="image" class="font-bold text-pink-800">Image : </label>
              <input type="file" id="image" name="image" accept="image/*" class="bg-transparent placeholder-pink-300 w-full" />
              @error('image')
              <p class="text-red-500">{{ $message }}</p>
              @enderror
            </div>
            <div class="w-full flex justify-center">
              <button type="submit" class="bg-pink-300 p-3 my-3 w-1/2 rounded-xl">Submit</button>
            </div>
            
        </div>
      </form>
    </div>
</body>
</html>