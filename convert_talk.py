# -*- coding:utf-8 -*-
import os

in_file = input('Input the addition talks file name(e.g.: talk201808):')
in_text = open(in_file, 'r', encoding='utf8').read()
os.remove(in_file)
out_text="<tr>\n"
for line in in_text.split('\n'):
	if not line:
		continue
	out_text += ''.join(['\t<td>'+t+'</td>\n' for t in line.split('\t')]) + '</tr>\n'

out_text += open('talks.php', 'r', encoding='utf8').read()
with open('talks.php','w', encoding='utf8') as f:
	f.write(out_text)