file_path = r'c:\Users\Azmeer Shah\Desktop\Data\www\mineral-links-new\resources\views\admin\product\mapping\index.blade.php'
with open(file_path, 'r', encoding='utf-8') as f:
    lines = f.readlines()

# lines is 0-indexed.
# We want to keep lines 1-243 (indices 0-242).
# We want to remove lines 244-719 (indices 243-718).
# We want to keep lines 720+ (indices 719+).

new_lines = lines[:243] + lines[719:]

with open(file_path, 'w', encoding='utf-8') as f:
    f.writelines(new_lines)

print("Successfully deleted lines 244-719")
