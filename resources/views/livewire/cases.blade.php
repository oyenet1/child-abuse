<div bg-gray-200>
  @auth
  <div class="w-full my-8 bg-gray-200">
    <form wire:submit.prevent="save" class="w-ful row overflow-y-auto" enctype="multipart/form-data">
      <div class="p-3 w-full grid grid-cols-1 space-x-2 lg:grid-cols-2 text-gray-500  font-bold items-center align-middle">
        <div class="mb-3">
          <label for="" class="mb-1 font-normal text-gray-600 text-sm">Name</label>
          <input type="text" wire:model.defer="name" class="p-2 rounded focus-within: focus:outline-none focus:border-purple-600 w-full border-2 placeholder-gray-400 font-medium " placeholder="name...">
          @error('name')
          <span class="text-xs text-red-600 font-normal">{{ $message }}</span>
          @enderror
        </div>
        <div class="mb-3">
          <label for="" class="mb-1 font-normal text-gray-600 text-sm">Age</label>
          <input type="text" wire:model.defer="age" class="p-2 rounded focus-within: focus:outline-none focus:border-purple-600 w-full border-2 placeholder-gray-400 font-medium " placeholder="name...">
          @error('age')
          <span class="text-xs text-red-600 font-normal">{{ $message }}</span>
          @enderror
        </div>
        <div class="mb-3">
          <label for="" class="mb-1 font-normal text-gray-600 text-sm">Sex</label>
          <select wire:model.defer="sex" class="px-2 py-2 text-sm rounded focus-within: focus:outline-none focus:border-purple-600 w-full border-2 placeholder-gray-400 font-semibold">
            <option value="select">Select Sex</option>
            @foreach (['male', 'female'] as $sex)
            <option value="{{ $sex }}" class="capitalize">{{ $sex }}</option>
            @endforeach
          </select>
          @error('sex')
          <span class="text-xs text-red-600 font-normal">{{ $message }}</span>
          @enderror
        </div>
        <div class="mb-3">
          <label for="" class="mb-1 font-normal text-gray-600 text-sm">Case Status</label>
          <select wire:model.defer="status" class="px-2 py-2 text-sm rounded focus-within: focus:outline-none focus:border-purple-600 w-full border-2 placeholder-gray-400 font-semibold">
            <option value="select">Select Case Status</option>
            @foreach (['verify', 'unverify'] as $sex)
            <option value="{{ $sex }}" class="capitalize">{{ $sex }}</option>
            @endforeach
          </select>
          @error('status')
          <span class="text-xs text-red-600 font-normal">{{ $message }}</span>
          @enderror
        </div>
        <div class="mb-3">
          <label for="" class="capitalize mb-1 font-normal text-gray-600 text-sm">Case Type</label>
          <input type="text" wire:model.defer="type" class="px-2 py-1 rounded focus-within: focus:outline-none focus:border-purple-600 w-full border-2 placeholder-gray-400 font-medium ">
          @error('type')
          <span class="text-xs text-red-600 font-normal">{{ $message }}</span>
          @enderror
        </div>
        <div class="mb-3">
          <label for="" class="capitalize mb-1 font-normal text-gray-600 text-sm">State of Origin</label>
          <select wire:model.defer="area_id" class="px-2 py-2 text-sm rounded focus-within: focus:outline-none focus:border-purple-600 w-full border-2 placeholder-gray-400 font-semibold">
            <option value="select">Select State</option>
            @foreach ($states as $state)
            <option value={{ $state->id }} class="capitalize">{{ $state->state }}</option>
            @endforeach
          </select>
          @error('area_id')
          <span class="text-xs text-red-600 font-normal">{{ $message }}</span>
          @enderror
        </div>
        <div class="mb-3">
          <label for="" class="mb-1 font-normal text-gray-600 text-sm">Local Government</label>
          <input type="text" wire:model.defer="lga" class="px-2 py-1 rounded focus-within: focus:outline-none focus:border-purple-600 w-full border-2 placeholder-gray-400 font-medium ">
          @error('lga')
          <span class="text-xs text-red-600 font-normal">{{ $message }}</span>
          @enderror
        </div>
        <div class="mb-3">
          <label for="" class="font-normal mb-1">Occurrence Date</label>
          <input type="date" wire:model.defer="date_occurred" class="px-2 py-1 rounded focus-within: focus:outline-none focus:border-purple-600 w-full border-2 placeholder-gray-400 font-medium " placeholder="">
          @error('date_occurred')
          <span class="text-xs text-red-600 font-normal">{{ $message }}</span>
          @enderror
        </div>
        <div class="mb-3 lg:col-span-2 ">
          <label for="" class="font-normal mb-1">Summary</label>
          <textarea type="date" wire:model.defer="summary" rows="10" class="px-2 py-1 rounded focus-within: focus:outline-none focus:border-purple-600 w-full border-2 placeholder-gray-400 font-medium "></textarea>
          @error('summary')
          <span class="text-xs text-red-600 font-normal">{{ $message }}</span>
          @enderror
        </div>
        <div class="mb-3 my-auto align-middle text-right lg:col-span-2">
          <button type="submit" class="rounded align-middle border-2 border-purple-500 bg-purple-600 hover:opacity-80 text-white py-2 text-center px-3 text-sm  font-medium">Save</button>
        </div>
      </div>
    </form>
  </div>
  @endauth
  <div class="w-full flex item-center justify-between px-2">
    <select wire:model="perPage" id="" class="rounded font-medium">
      <option value="10" class="">10</option>
      <option value="25" class="">25</option>
      <option value="50" class="">50</option>
      <option value="100" class="">100</option>
    </select>
    <input type="text" wire:model.debounce.300="search" class="px-2 py-1 rounded-full w-52 shadow placeholder-gray-500 italic text-center" placeholder="search by name only...">
  </div>
  <table class="w-full table my-4">
    <thead class="">
      <tr class="w-full p-2 bg-black text-white">
        <th class="p-2 text-left">No</th>
        <th class="p-2 text-left">Name</th>
        <th class="p-2 text-left">Age</th>
        <th class="p-2 text-left">State</th>
        <th class="p-2 text-left">LGA</th>
        <th class="p-2 text-left">Status</th>
        <th class="p-2 text-left">Type</th>
        <th class="p-2 text-left">Date</th>
        <th class="p-2 text-left">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($cases as $item)
      <tr class="p-2 capitalize border odd:bg-gray-100">
        <td class="p-2">{{ $loop->iteration }}</td>
        <td class="p-2">{{ $item->name }}</td>
        <td class="p-2">{{ $item->age }}</td>
        <td class="p-2">{{ $item->area->state }}</td>
        <td class="p-2">{{ $item->lga }}</td>
        <td class="p-2">{{ $item->status }}</td>
        <td class="p-2">{{ $item->type }}</td>
        <td class="p-2">{{ formatDate($item->date_occurred) }}</td>
        <td class="p-2 flex item-center space-x-2">
          @auth
          @if ($item->status == 'unverified')
          <button wire:click="confirmVerify({{ $item->id }})" class="rounded px-2 py-1 text-sm bg-green-500 hover:bg-green-700 text-white">
            Verify
          </button>
          @else
          <button class="  rounded-full text-sm bg-gray-500 text-white cursor-not-allowed" disabled>
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
          </button>
          @endif
          <button wire:click="confirmDelete({{ $item->id }})" class="rounded px-2 py-1 text-sm bg-red-500 hover:bg-red-700 text-white">
            Delete
          </button>
          @endauth
          <a href="/cases/{{ $item->name }}" class="rounded px-2 py-1 text-sm bg-blue-500 hover:bg-blue-700 text-white">
            View Details
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="text-center w-4/5 mx-auto">{{ $cases->links() }}</div>
</div>
