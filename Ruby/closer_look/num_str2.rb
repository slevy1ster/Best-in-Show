str = String.new('1,2,3\n4,5,6\n7,8,9')
no_commas = str.gsub(/,/,'')
arr = no_commas.split(/\\n/)
puts arr
