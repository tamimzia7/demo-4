<div>
   
    <h1>add new student</h1>
    <form action="/students" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter your namne">
        <br>
        <input type="text" name="email" placeholder="Enter your email">
        <br>
        <input type="number" name="phone" placeholder="Enter your phone">
            <br>
        <button type="submit">Add</button>
</div>
