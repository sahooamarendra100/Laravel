<form action="update" method="POST">
@csrf
   <input type="text" name="name" placeholder="company name" >
   <br><br>
   <input type="text" name="adress" placeholder="company adress" >
   <br><br>

   <button type="submit">Update</button>
</form>
