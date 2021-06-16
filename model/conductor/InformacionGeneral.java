/**
 * 
 */
package org.sieca.everis.pdcc.model.conductor;

/**
 * @author ytorregl
 *
 */
public class InformacionGeneral {
	    	
	private String PRIMER_NOMBRE;
	private String SEGUNDO_NOMBRE;
	private String PRIMER_APELLIDO;
	private String SEGUNDO_APELLIDO;
	private String SEXO;
	private String DIRECCION_DOMICILIAR;
	private String NACIONALIDAD;
	private String PAIS_RESIDENCIA;
	private String NIT;
	private String PAIS_NACIMIENTO;
	private String FECHA_NACIMIENTO;
	private String ESTATUS;
	private String FOTO;
	
	
	public InformacionGeneral() {
		super();
		// TODO Auto-generated constructor stub
	}

	/**
	 * @param PRIMER_NOMBRE
	 * @param SEGUNDO_NOMBRE
	 * @param PRIMER_APELLIDO
	 * @param SEGUNDO_APELLIDO
	 * @param SEXO
	 * @param DIRECCION_DOMICILIAR
	 * @param NACIONALIDAD
	 * @param PAIS_RESIDENCIA
	 * @param NIT
	 * @param PAIS_NACIMIENTO
	 * @param FECHA_NACIMIENTO
	 * @param ESTATUS
	 * @param FOTO
	 */
	public InformacionGeneral(String PRIMER_NOMBRE, String SEGUNDO_NOMBRE, String PRIMER_APELLIDO,
			String SEGUNDO_APELLIDO, String SEXO, String DIRECCION_DOMICILIAR, String NACIONALIDAD,
			String PAIS_RESIDENCIA, String NIT, String PAIS_NACIMIENTO, String FECHA_NACIMIENTO, String ESTATUS,
			String FOTO) {
		super();
		this.PRIMER_NOMBRE = PRIMER_NOMBRE;
		this.SEGUNDO_NOMBRE = SEGUNDO_NOMBRE;
		this.PRIMER_APELLIDO = PRIMER_APELLIDO;
		this.SEGUNDO_APELLIDO = SEGUNDO_APELLIDO;
		this.SEXO = SEXO;
		this.DIRECCION_DOMICILIAR = DIRECCION_DOMICILIAR;
		this.NACIONALIDAD = NACIONALIDAD;
		this.PAIS_RESIDENCIA = PAIS_RESIDENCIA;
		this.NIT = NIT;
		this.PAIS_NACIMIENTO = PAIS_NACIMIENTO;
		this.FECHA_NACIMIENTO = FECHA_NACIMIENTO;
		this.ESTATUS = ESTATUS;
		this.FOTO = FOTO;
	}

	/**
	 * @return the PRIMER_NOMBRE
	 */
	public String getPRIMER_NOMBRE() {
		return PRIMER_NOMBRE;
	}

	/**
	 * @param PRIMER_NOMBRE the PRIMER_NOMBRE to set
	 */
	public void setPRIMER_NOMBRE(String PRIMER_NOMBRE) {
		this.PRIMER_NOMBRE = PRIMER_NOMBRE;
	}

	/**
	 * @return the SEGUNDO_NOMBRE
	 */
	public String getSEGUNDO_NOMBRE() {
		return SEGUNDO_NOMBRE;
	}

	/**
	 * @param SEGUNDO_NOMBRE the SEGUNDO_NOMBRE to set
	 */
	public void setSEGUNDO_NOMBRE(String SEGUNDO_NOMBRE) {
		this.SEGUNDO_NOMBRE = SEGUNDO_NOMBRE;
	}

	/**
	 * @return the PRIMER_APELLIDO
	 */
	public String getPRIMER_APELLIDO() {
		return PRIMER_APELLIDO;
	}

	/**
	 * @param PRIMER_APELLIDO the PRIMER_APELLIDO to set
	 */
	public void setPRIMER_APELLIDO(String PRIMER_APELLIDO) {
		this.PRIMER_APELLIDO = PRIMER_APELLIDO;
	}

	/**
	 * @return the SEGUNDO_APELLIDO
	 */
	public String getSEGUNDO_APELLIDO() {
		return SEGUNDO_APELLIDO;
	}

	/**
	 * @param SEGUNDO_APELLIDO the SEGUNDO_APELLIDO to set
	 */
	public void setSEGUNDO_APELLIDO(String SEGUNDO_APELLIDO) {
		this.SEGUNDO_APELLIDO = SEGUNDO_APELLIDO;
	}

	/**
	 * @return the SEXO
	 */
	public String getSEXO() {
		return SEXO;
	}

	/**
	 * @param SEXO the SEXO to set
	 */
	public void setSEXO(String SEXO) {
		this.SEXO = SEXO;
	}

	/**
	 * @return the DIRECCION_DOMICILIAR
	 */
	public String getDIRECCION_DOMICILIAR() {
		return DIRECCION_DOMICILIAR;
	}

	/**
	 * @param DIRECCION_DOMICILIAR the DIRECCION_DOMICILIAR to set
	 */
	public void setDIRECCION_DOMICILIAR(String DIRECCION_DOMICILIAR) {
		this.DIRECCION_DOMICILIAR = DIRECCION_DOMICILIAR;
	}

	/**
	 * @return the NACIONALIDAD
	 */
	public String getNACIONALIDAD() {
		return NACIONALIDAD;
	}

	/**
	 * @param NACIONALIDAD the NACIONALIDAD to set
	 */
	public void setNACIONALIDAD(String NACIONALIDAD) {
		this.NACIONALIDAD = NACIONALIDAD;
	}

	/**
	 * @return the PAIS_RESIDENCIA
	 */
	public String getPAIS_RESIDENCIA() {
		return PAIS_RESIDENCIA;
	}

	/**
	 * @param PAIS_RESIDENCIA the PAIS_RESIDENCIA to set
	 */
	public void setPAIS_RESIDENCIA(String PAIS_RESIDENCIA) {
		this.PAIS_RESIDENCIA = PAIS_RESIDENCIA;
	}

	/**
	 * @return the NIT
	 */
	public String getNIT() {
		return NIT;
	}

	/**
	 * @param NIT the NIT to set
	 */
	public void setNIT(String NIT) {
		this.NIT = NIT;
	}

	/**
	 * @return the PAIS_NACIMIENTO
	 */
	public String getPAIS_NACIMIENTO() {
		return PAIS_NACIMIENTO;
	}

	/**
	 * @param PAIS_NACIMIENTO the PAIS_NACIMIENTO to set
	 */
	public void setPAIS_NACIMIENTO(String PAIS_NACIMIENTO) {
		this.PAIS_NACIMIENTO = PAIS_NACIMIENTO;
	}

	/**
	 * @return the FECHA_NACIMIENTO
	 */
	public String getFECHA_NACIMIENTO() {
		return FECHA_NACIMIENTO;
	}

	/**
	 * @param FECHA_NACIMIENTO the FECHA_NACIMIENTO to set
	 */
	public void setFECHA_NACIMIENTO(String FECHA_NACIMIENTO) {
		this.FECHA_NACIMIENTO = FECHA_NACIMIENTO;
	}

	/**
	 * @return the ESTATUS
	 */
	public String getESTATUS() {
		return ESTATUS;
	}

	/**
	 * @param ESTATUS the ESTATUS to set
	 */
	public void setESTATUS(String ESTATUS) {
		this.ESTATUS = ESTATUS;
	}

	/**
	 * @return the FOTO
	 */
	public String getFOTO() {
		return FOTO;
	}

	/**
	 * @param FOTO the FOTO to set
	 */
	public void setFOTO(String FOTO) {
		this.FOTO = FOTO;
	}
	
	

	
	
	
	
	
	
	
	

}
