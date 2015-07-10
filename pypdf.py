# from PyPDF2 import PdfFileWriter,PdfFileReader

# pdf1=PdfFileReader(open("readme.pdf"))
# pdf2=PdfFileReader(open("readme.pdf"))
# writer = PdfFileWriter()

# # add the page to itself
# for i in range(0,pdf1.getNumPages()):
#      writer.addPage(pdf1.getPage(i))

# # write to file
# with file("destination.pdf", "wb") as outfp:
#     writer.write(outfp)

# from PyPDF2 import PdfFileWriter, PdfFileReader
# # a reader
# reader=PdfFileReader(open("readme.pdf",'rb'))

# # a writer
# writer=PdfFileWriter()
# outfp=open("sample.pdf",'wb')
# writer.write(outfp)

