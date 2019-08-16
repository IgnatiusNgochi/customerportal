<div class="form-group">
<label for="name">Name</label>
<input type="text" name="name" placeholder="Input name" value="{{old('name')??$customer->name}}" class="form-control"> 
<div> {{$errors->first('name')}} </div>
</div>
<div class="form-group">
    <label for="email">Email</label>
<input type="text" name="email" placeholder="Input email" value="{{old('email') ??$customer->email}}" class="form-control"> 
<div> {{$errors->first('email')}} </div>
</div>
<div class="form-group"> 
<label for="active">Status</label>
    <select name="active" id="active" class="form-control">
       <option value="" disabled > Select customer Status</option>

       @foreach($customer->activeOptions() as $activeOptionKey=> $activeOptionValue )
         <option value="{{ $activeOptionKey }}" {{$customer-> active ==  $activeOptionValue ? 'selected':' ' }} >{{$activeOptionValue}}</option>

       @endforeach
       
           </select>
</div>

<div class="form-group">
    <label for="date">Date Of Birth </label>
<input type="date" name="date" placeholder="Input date" value="{{old('date')??$customer->date}}" class="form-control"> 
<div> {{$errors->first('date')}} </div>
</div>

 <div class="form-group"> 
<label for="Company">Company</label>
    <select name="company_id" id="company_id" class="form-control">
      @foreach ($companies as $company)
       <option value="{{$company->id}}" {{$company->id == $customer->company_id ? 'selected' : '' }} > {{$company->name}} </option>
    
      @endforeach
    </select>
   
</div> 

@csrf