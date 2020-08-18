let subjects = ['ARABIC',
'AGRICULTURAL SCIENCE',
'AUTO PARTS MERCHANDISING',
'AUTO MECHANICS',
'AUTO MECHANICAL WORK',
'AUTO ELECTRICAL WORK',
'AUTO BODY REPAIRS AND SPRAY PAINTING',
'APPLIED ELECTRICITY OR BASIC ELECTRICITY',
'ANIMAL HUSBANDRY',
'BUSINESS MANAGEMENT',
'BUILDING CONSTRUCTION',
'BOOK KEEPING',
'BLOCKLAYING, BRICKLAYING AND CONCRETING',
'BIOLOGY',
'BASKETRY',
'CROP HUSBANDRY AND HORTICULTURE',
'COSMETOLOGY',
'COMPUTER STUDIES',
'COMMERCE',
'CLOTHING AND TEXTILES',
'CLERICAL OFFICE DUTIES',
'CIVIC EDUCATION',
'CHRISTIAN RELIGIOUS STUDIES',
'CHEMISTRY',
'CERAMICS',
'CATERING CRAFT PRACTICE',
'CAPENTRY AND JOINERY',
'DYEING & BLEACHING',
'DATA PROCESSING',
'ENGLISH LANGUAGE',
'ELECTRONICS OR BASIC ELECTRONICS',
'ELECTRICAL INSTALLATION AND MAINTENANCE',
'EFIK',
'EDO',
'ECONOMICS',
'FURTHER MATHEMATICS',
'FURNITURE MAKING',
'FRENCH',
'FORESTRY',
'FOODS AND NUTRITION',
'FISHERIES',
'FINANCIAL ACCOUNTING',
'TYPEWRITING',
'TOURISM',
'TEXTILES',
'TECHNICAL DRAWING',
'STORE MANAGEMENT',
'STORE KEEPING WAEC',
'SOCIAL STUDIES',
'SHORTHAND',
'SCULPTURE',
'SALESMANSHIP',
'REFRIGERATION AND AIR CONDITIONING',
'RADIO,TELEVISION AND ELECTRONICS WORKS',
'PRINTING CRAFT PRACTICE',
'PRINCIPLES OF COST ACCOUNTING',
'PLUMBING AND PIPE FITTING',
'PICTURE MAKING',
'PHYSICS',
'PHYSICAL EDUCATION',
'PHOTOGRAPHY',
'PAINTING AND DECORATING',
'OFFICE PRACTICE',
'MUSIC',
'MINING',
'METALWORK',
'MARKETING',
'MACHINE WOODWORKING',
'LITERATURE IN ENGLISH',
'LEATHERWORK',
'LEATHER GOODS',
'JEWELLERY',
'ISLAMIC RELIGIOUS STUDIES',
'INTEGRATED SCIENCE',
'INSURANCE',
'INFORMATION AND COMMUNICATION TECHNOLOGY',
'IGBO',
'IBIBIO',
'HOME MANAGEMENT',
'HISTORY',
'HEALTH EDUCATION OR HEALTH SCIENCE',
'HAUSA',
'GSM PHONES MAINTENANCE AND REPAIRS',
'GRAPHIC DESIGN',
'GOVERNMENT',
'GHANAIAN LANGUAGES',
'GEOGRAPHY',
'GENERAL MATHEMATICS OR MATHEMATICS',
'GENERAL KNOWLEDGE IN ART',
'GENERAL AGRICULTURE',
'GARMENT MAKING',
'VISUAL ART',
'UPHOLSTERY',
'WOODWORK',
'WEST AFRICAN TRADITIONAL RELIGION',
'WELDING AND FABRICATION ENGINEERING CRAFT PRACTICE',
'YORUBA']

let grades = [
  'A1','B2','B3','C4','C5','C6','D7','E8','F9']

var selectOption = document.querySelectorAll("#subject")
var gradeOption = document.querySelectorAll("#grade")


const myFunction1 = () => {
  console.log("Subject Runs");
  subjects.forEach(subject=>{
    // console.log(subject)
    display = `
      <option selected hidden>Select Subject</option>
      <option value=${subject}>${subject}</option>
    `
    selectOption[0].innerHTML += display  
    selectOption[1].innerHTML += display  
    selectOption[2].innerHTML += display  
    selectOption[3].innerHTML += display  
    selectOption[4].innerHTML += display  
    selectOption[5].innerHTML += display  
    selectOption[6].innerHTML += display  
    selectOption[7].innerHTML += display  
    selectOption[8].innerHTML += display  
  })
}

  const gradeFunction =() => {
  console.log("Grade runs")
  grades.forEach(grade=>{
    // console.log(grade)
    display2 = `
    <option selected hidden>Grade</option>
    <option value=${grade}>${grade}</option>
    `
    gradeOption[0].innerHTML += display2
    gradeOption[1].innerHTML += display2
    gradeOption[2].innerHTML += display2
    gradeOption[3].innerHTML += display2
    gradeOption[4].innerHTML += display2
    gradeOption[5].innerHTML += display2
    gradeOption[6].innerHTML += display2
    gradeOption[7].innerHTML += display2
    gradeOption[8].innerHTML += display2
  })

}

const generalFunc =() => {
  myFunction1();
  gradeFunction();
}