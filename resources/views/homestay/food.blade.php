<x-homestay-dashboard-layout>
<h1 class="ml-8 mt-6 font-semibold text-xl text-gray-800 leading-tight"> Add food</h1>
<div class="container mt-5">
    
<form>
            <!-- Food Name -->
            <div style="margin-bottom: 10px;">
                <label for="foodName" style="display: block; font-size: 14px; margin-bottom: 5px;">Food Name <span style="color: red;">*</span></label>
                <input type="text" id="foodName" name="foodName" placeholder="Enter food name" style="width: 100%; padding: 8px; font-size: 14px; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <!-- Price -->
            <div style="margin-bottom: 10px;">
                <label for="price" style="display: block; font-size: 14px; margin-bottom: 5px;">Price <span style="color: red;">*</span></label>
                <input type="text" id="price" name="price" placeholder="Enter price" style="width: 100%; padding: 8px; font-size: 14px; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <!-- Categories -->
            <div style="margin-bottom: 10px;">
                <label for="categories" style="display: block; font-size: 14px; margin-bottom: 5px;">Categories <span style="color: red;">*</span></label>
                <select id="categories" name="categories" style="width: 100%; padding: 8px; font-size: 14px; border: 1px solid #ccc; border-radius: 4px;">
                    <option value="">Select option</option>
                    <option value="newari">Newari food</option>
                    <!-- Add more options here -->
                </select>
                <button type="button" style="margin-top: 5px; padding: 5px 10px; background: #0056b3; color: white; border: none; font-size: 12px; border-radius: 4px; cursor: pointer;">
                    Add new category
                </button>
            </div>

             <!-- Food Image -->
    <div class="form-group" style="margin-bottom: 20px;">
        <label for="foodImage" style="display: block; font-size: 14px; margin-bottom: 5px;">Food Image:</label>
        <div style="border: 2px dashed #ccc; border-radius: 4px; width: 100%; height: 200px; display: flex; align-items: center; justify-content: center; background-color: #f9f9f9; cursor: pointer;">
            <input type="file" id="foodImage" name="foodImage" style="opacity: 0; position: absolute; width: 100%; height: 100%; cursor: pointer;">
            <p style="font-size: 14px; color: #888; margin: 0;">Drag & Drop your file here or <span style="color: #0056b3; text-decoration: underline;">Browse</span></p>
        </div>
    </div>
            <!-- Buttons -->
            <div style="display: flex; justify-content: flex-start; gap: 10px;">
                <button type="submit" style="padding: 8px 15px; background: #0056b3; color: white; font-size: 14px; border: none; border-radius: 4px; cursor: pointer;">Add</button>
                <button type="button" style="padding: 8px 15px; background: #ccc; font-size: 14px; color: black; border: none; border-radius: 4px; cursor: pointer;">Cancel</button>
            </div>
        </form>
</div>

</x-homestay-dashboard-layout>