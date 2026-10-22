import sys
import zipfile
import xml.etree.ElementTree as ET


def docx2text(path):
    with zipfile.ZipFile(path) as z:
        xml = z.read('word/document.xml')
    tree = ET.fromstring(xml)
    namespace = {'w': 'http://schemas.openxmlformats.org/wordprocessingml/2006/main'}
    texts = [node.text for node in tree.findall('.//w:t', namespace) if node.text]
    return ''.join(texts)


if __name__ == '__main__':
    if len(sys.argv) > 1:
        path = sys.argv[1]
    else:
        path = r"c:\Users\Alumno\Desktop\daw2\IA y Python\Practica1_BolocanD\dawm2d_opia_practica_1_BolocanD.docx"
    try:
        print(docx2text(path))
    except Exception as e:
        print('ERROR:', e)
